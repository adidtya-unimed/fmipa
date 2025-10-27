<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['id', 'nip', 'nama', 'penempatan', 'status', 'foto_lama'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nip'], $conn);
$input2 = real_escape($_POST['nama'], $conn);
$input3 = real_escape($_POST['penempatan'], $conn);
$input4 = real_escape($_POST['status'], $conn);
$input5 = real_escape($_POST['foto_lama'], $conn);
$input7 = real_escape($_POST['id'], $conn);

if ($_FILES['foto']['error'] === 4) {
    $input6 = $input5;
} else {
    $q = sprintf("SELECT `foto` FROM tendik WHERE `id`='%s'", $input7);
    $rs = mysqli_query($conn, $q);

    if ($rs && mysqli_num_rows($rs) > 0) {
        $r = mysqli_fetch_assoc($rs);
        $fotoPath = 'storage/tendik/' . $r['foto'];
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }
    }

    $input6 = upload($input2);
    if ($input6 === false) {
        return false;
    }
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
        redirect('/main?p=tambah-tendik');
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
        redirect('/main?p=tambah-tendik');
        return false;
    }

    $namaFileBaru = preg_replace('/\s+/', '_', $nama);
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    $destination = 'storage/tendik/' . $namaFileBaru;

    move_uploaded_file($tmpName, $destination);

    return $namaFileBaru;
}

$query = sprintf(
    "UPDATE tendik SET `nip`='%s', `nama`='%s', `penempatan`='%s', `status`='%s', `foto`='%s' WHERE `id`='%s'",
    $input1,
    $input2,
    $input3,
    $input4,
    $input6,
    $input7
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-tendik');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-tendik');
}
