<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['nidn', 'nip', 'nama', 'keahlian', 'prodi', 'jurusan', 'status', 'golongan', 'masa_kerja', 'pendidikan', 'fungsional'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nidn'], $conn);
$input2 = real_escape($_POST['nip'], $conn);
$input3 = real_escape($_POST['nama'], $conn);
$input4 = real_escape($_POST['keahlian'], $conn);
$input5 = real_escape($_POST['prodi'], $conn);
$input6 = real_escape($_POST['jurusan'], $conn);
$input7 = real_escape($_POST['status'], $conn);
$input8 = real_escape($_POST['golongan'], $conn);
$input9 = real_escape($_POST['masa_kerja'], $conn);
$input10 = real_escape($_POST['pendidikan'], $conn);
$input11 = real_escape($_POST['fungsional'], $conn);


$query = sprintf(
    "INSERT INTO dosen(`nidn`,`nip`,`nama`,`keahlian`,`prodi`,`jurusan`,`status`,`golongan`,`masa_kerja`,`pendidikan`,`fungsional`)
        VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    ",
    $input1,
    $input2,
    $input3,
    $input4,
    $input5,
    $input6,
    $input7,
    $input8,
    $input9,
    $input10,
    $input11
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-dosen');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-dosen');
}
