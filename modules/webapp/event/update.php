<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['id', 'nama', 'tanggal', 'tombol', 'link', 'deskripsi'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama'], $conn);
$input2 = $_POST['tanggal'];
$input3 = real_escape($_POST['tombol'], $conn);
$input4 = real_escape($_POST['link'], $conn);
$input5 = real_escape($_POST['deskripsi'], $conn);
$input6 = real_escape($_POST['id'], $conn);

$query = sprintf(
    "UPDATE event SET `nama`='%s', `tanggal`='%s', `tombol`='%s', `link`='%s', `deskripsi`='%s' WHERE `id`='%s'",
    $input1,
    $input2,
    $input3,
    $input4,
    $input5,
    $input6
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-event');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-event');
}
