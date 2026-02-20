<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['role'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['role'], $conn);

$query = sprintf(
    "INSERT INTO role(`role`)
        VALUES('%s')
    ",
    $input1
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-role');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-role');
}
