<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['nama', 'jabatan', 'penempatan', 'bidang', 'email', 'kontak', 'level'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama'], $conn);
$input2 = real_escape($_POST['jabatan'], $conn);
$input3 = real_escape($_POST['penempatan'], $conn);
$input4 = real_escape($_POST['bidang'], $conn);
$input5 = real_escape($_POST['email'], $conn);
$input6 = real_escape($_POST['kontak'], $conn);
$input7 = real_escape($_POST['level'], $conn);
$input8 = upload($input1);

if ($input8 === false) {
    return false;
}

function upload($nama)
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ($error === 4) {
        session_start();
        $_SESSION['gagal'] = "Gagal Deteksi File, Silahkan Upload lagi";
        redirect('/main?p=tambah-document');
        return false;
    }

    // $ekstensiFileValid = ['pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    // if (!in_array($ekstensiFile, $ekstensiFileValid)) {
    //     session_start();
    //     $_SESSION['gagal'] = "Ekstensi File Salah";
    //     redirect('/main?p=tambah-document');
    //     return false;
    // }

    if ($ukuranFile > 50000000) {
        session_start();
        $_SESSION['gagal'] = "Ukuran File Terlalu Besar";
        redirect('/main?p=tambah-fungsionaris');
        return false;
    }

    $namaFileBaru = preg_replace('/\s+/', '_', $nama);
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    $destination = 'storage/fungsionaris/' . $namaFileBaru;

    move_uploaded_file($tmpName, $destination);

    return $namaFileBaru;
}

$query = sprintf(
    "INSERT INTO fungsionaris(`nama`,`jabatan`,`penempatan`,`bidang`,`email`,`kontak`,`level`,`foto`)
        VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    ",
    $input1,
    $input2,
    $input3,
    $input4,
    $input5,
    $input6,
    $input7,
    $input8
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-fungsionaris');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-fungsionaris');
}
