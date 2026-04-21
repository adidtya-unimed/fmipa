<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['id', 'nama_kerjasama', 'jenis', 'tgl_kerjasama', 'tingkat', 'mitra', 'kategori', 'link_dokumen'])) {
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
$input8 = real_escape($_POST['id'], $conn);

$query = sprintf(
    "UPDATE kerjasama SET `nama_kerjasama`='%s', `jenis`='%s', `tgl_kerjasama`='%s', `tingkat`='%s', `mitra`='%s', `kategori`='%s', `link_dokumen`='%s' WHERE `id`='%s'",
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
    redirect('/main?p=tampil-kerjasama');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Update";
    redirect('/main?p=tampil-kerjasama');
}
