<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['id', 'nama', 'kategori', 'keterangan', 'link_dokumen'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama'], $conn);
$input2 = real_escape($_POST['kategori'], $conn);
$input3 = real_escape($_POST['keterangan'], $conn);
$input4 = real_escape($_POST['link_dokumen'], $conn);
$input5 = real_escape($_POST['id'], $conn);

$query = sprintf(
    "UPDATE mutu_internal SET `nama`='%s', `kategori`='%s', `keterangan`='%s', `link_dokumen`='%s' WHERE `id`='%s'",
    $input1,
    $input2,
    $input3,
    $input4,
    $input5
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
