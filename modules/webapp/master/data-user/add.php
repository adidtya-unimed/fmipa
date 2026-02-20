<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(['nama', 'username', 'password', 'role'])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input1 = real_escape($_POST['nama'], $conn);
$input2 = real_escape($_POST['username'], $conn);
$input3 = real_escape($_POST['password'], $conn);
$input4 = real_escape($_POST['role'], $conn);

$query = sprintf(
    "INSERT INTO user(`nama`,`username`,`password`,`role`)
        VALUES('%s','%s','%s','%s')
    ",
    $input1,
    $input2,
    password_hash($input3, PASSWORD_DEFAULT),
    $input4
);


$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-user');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Tambahkan";
    redirect('/main?p=tampil-user');
}
