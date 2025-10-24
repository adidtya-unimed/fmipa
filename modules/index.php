<?php
defined('FMIPA_APP') or exit('Forbidden...!');

include './modules/website/templates/header.php';
include './modules/website/templates/sidebar.php';

$conn = db_mysqli();

if (isset($_GET['p'])) {
    $p = $_GET['p'];

    // $p = htmlspecialchars(trim($p));

    switch ($p) {
        case 'home':
            include "website/home/home.php";
            break;
        case 'visi-misi':
            include "website/vmts/vmts.php";
            break;
        case 'struktur-organisasi':
            include "website/struktur-organisasi/struktur_organisasi.php";
            break;
        case 'fungsionaris':
            include "website/fungsionaris/fungsionaris.php";
            break;
        case 'sejarah':
            include "website/sejarah/sejarah.php";
            break;
        case 'prodi':
            include "website/prodi/prodi.php";
            break;
        default:
            include "home/home.php";
            break;
    }
} else {
    include "website/home/home.php";
}


include './modules/website/templates/footer.php';
