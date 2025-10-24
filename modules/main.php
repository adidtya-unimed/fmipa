<?php defined('FMIPA_APP') or exit('Forbidden...!');

include 'webapp/templates/header.php';
include 'webapp/templates/sidebar.php';

$conn = db_mysqli();

if (isset($_GET['p'])) {
    $page = $_GET['p'];

    switch ($page) {
        case 'dashboard':
            include "webapp/dashboard/dashboard.php";
            break;
        case 'tampil-event':
            include "webapp/event/view.php";
            break;
        case 'tambah-event':
            include "webapp/event/tambah.php";
            break;
        case 'edit-event':
            include "webapp/event/edit.php";
            break;
        case 'tampil-fungsionaris':
            include "webapp/fungsionaris/view.php";
            break;
        case 'tambah-fungsionaris':
            include "webapp/fungsionaris/tambah.php";
            break;
        case 'edit-fungsionaris':
            include "webapp/fungsionaris/edit.php";
            break;
        case 'tampil-dosen':
            include "webapp/dosen/view.php";
            break;
        case 'tambah-dosen':
            include "webapp/dosen/tambah.php";
            break;
        case 'edit-dosen':
            include "webapp/dosen/edit.php";
            break;
        case 'tampil-prodi':
            include "webapp/prodi/view.php";
            break;
        case 'tambah-prodi':
            include "webapp/prodi/tambah.php";
            break;
        case 'edit-prodi':
            include "webapp/prodi/edit.php";
            break;
        default:
            include "webapp/dashboard/dashboard.php";
            break;
    }
} else {
    include "webapp/dashboard/dashboard.php";
}

include 'webapp/templates/footer.php';
