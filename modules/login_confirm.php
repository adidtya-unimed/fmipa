<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifPOST(["username", "password"])) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$username = real_escape($_POST['username'], $conn);
$password = $_POST['password'];

$query = sprintf("SELECT * FROM user WHERE `username`='%s'", $username);
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 1 && mysqli_num_rows($result) == 0) {
    setcookie('pesan', 'Username salah!');
    redirect('/admin');
}

$row = mysqli_fetch_assoc($result);

if (!password_verify($password, $row['password'])) {
    setcookie('pesan', 'Kombinasi password dan username salah!', time() + 2);
    redirect('/admin');
}

session_start();
$_SESSION[$config['SESSION_NAME']] = $row;
mysqli_close($conn);
redirect('/main');
