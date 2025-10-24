<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!ifGET('id')) {
    die('Request Rejected...!');
}

$conn = db_mysqli();

$input = real_escape($_GET['id'], $conn);

$q = sprintf("SELECT `foto` FROM fungsionaris WHERE `id`='%s'", $input);
$rs = mysqli_query($conn, $q);

if ($rs && mysqli_num_rows($rs) > 0) {
    $r = mysqli_fetch_assoc($rs);
    $fotoPath = 'storage/fungsionaris/' . $r['foto'];
    if (file_exists($fotoPath)) {
        unlink($fotoPath);
    }
}
$query = sprintf("DELETE FROM fungsionaris WHERE `id` = '%s' LIMIT 1", $input);

$result = mysqli_query($conn, $query);

if (!$result) {
    mysqli_close($conn);
    session_start();
    $_SESSION['gagal'] = "Proses gagal, mohon periksa kembali";
    redirect('/main?p=tampil-fungsionaris');
} else {
    mysqli_close($conn);
    session_start();
    $_SESSION['sukses'] = "Data Berhasil di Hapus";
    redirect('/main?p=tampil-fungsionaris');
}
