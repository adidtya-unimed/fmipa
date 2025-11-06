<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['nama', 'kategori', 'keterangan', 'link_dokumen'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama'], $conn);
$input2 = real_escape($_POST['kategori'], $conn);
$input3 = real_escape($_POST['keterangan'], $conn);
$input4 = real_escape($_POST['link_dokumen'], $conn);

$query = sprintf(
    "INSERT INTO mutu_internal(`nama`,`kategori`,`keterangan`,`link_dokumen`)
        VALUES('%s', '%s', '%s', '%s')
    ",
    $input1,
    $input2,
    $input3,
    $input4
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-mutu-internal');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-mutu-internal');
}
