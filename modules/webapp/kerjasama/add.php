<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['nama_kerjasama', 'jenis', 'tgl_kerjasama', 'tingkat', 'mitra', 'kategori', 'link_dokumen'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama_kerjasama'], $conn);
$input2 = real_escape($_POST['jenis'], $conn);
$input3 = real_escape($_POST['tgl_kerjasama'], $conn);
$input4 = real_escape($_POST['tingkat'], $conn);
$input5 = real_escape($_POST['mitra'], $conn);
$input6 = real_escape($_POST['kategori'], $conn);
$input7 = real_escape($_POST['link_dokumen'], $conn);

$query = sprintf(
    "INSERT INTO kerjasama(`nama_kerjasama`,`jenis`,`tgl_kerjasama`,`tingkat`,`mitra`,`kategori`,`link_dokumen`)
        VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s')
    ",
    $input1,
    $input2,
    $input3,
    $input4,
    $input5,
    $input6,
    $input7
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-kerjasama');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-kerjasama');
}
