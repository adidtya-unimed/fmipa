<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['nama', 'jurusan', 'jenjang', 'gelar', 'akreditasi', 'no_sk', 'masa_berlaku_mulai', 'masa_berlaku_akhir', 'link_sertifikat'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama'], $conn);
$input2 = real_escape($_POST['jurusan'], $conn);
$input3 = real_escape($_POST['jenjang'], $conn);
$input4 = real_escape($_POST['gelar'], $conn);
$input5 = real_escape($_POST['akreditasi'], $conn);
$input6 = real_escape($_POST['no_sk'], $conn);
$input7 = real_escape($_POST['masa_berlaku_mulai'], $conn);
$input8 = real_escape($_POST['masa_berlaku_akhir'], $conn);
$input9 = real_escape($_POST['link_sertifikat'], $conn);

$query = sprintf(
    "INSERT INTO prodi(`nama`,`jurusan`,`jenjang`,`gelar`,`akreditasi`,`no_sk`,`masa_berlaku_mulai`,`masa_berlaku_akhir`,`link_sertifikat`)
        VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    ",
    $input1,
    $input2,
    $input3,
    $input4,
    $input5,
    $input6,
    $input7,
    $input8,
    $input9
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-prodi');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-prodi');
}
