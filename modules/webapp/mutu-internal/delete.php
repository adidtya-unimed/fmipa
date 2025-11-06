<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifGET('id')) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input = real_escape($_GET['id'], $conn);

$query = sprintf("DELETE FROM mutu_internal WHERE `id` = '%s' LIMIT 1", $input);

$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-mutu-internal');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Hapus";
    redirect('/main?p=tampil-mutu-internal');
}
