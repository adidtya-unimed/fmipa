<?php
defined('FMIPA_APP') or exit('Forbidden...!');

$menus = [
    "admin" => [
        ["nama" => "Dashboard", "icon" => "bi bi-bar-chart", "href" => getRoute('/main') . "?p=dashboard", "aktif" => "active", "sub" => null],
        // ["nama" => "Document", "icon" => "bi bi-file-earmark-richtext", "href" => "#", "aktif" => null, "sub" => [
        //     ["nama" => "View Document", "href" => getRoute('main') . "?p=tampil-document"],
        //     ["nama" => "Insert Document", "href" => getRoute('main') . "?p=tambah-document"],
        // ]],
        // ["nama" => "Dokumen Akreditasi", "icon" => "bi bi-file-earmark-diff", "href" => getRoute('/main') . "?p=tampil-data-akreditasi", "aktif" => null, "sub" => null],
        // ["nama" => "Dokumen IKU", "icon" => "bi bi-file-earmark-easel", "href" => getRoute('/main') . "?p=tampil-data-iku", "aktif" => null, "sub" => null],
        ["nama" => "Event", "icon" => "bi bi-archive", "href" => getRoute('/main') . "?p=tampil-event", "aktif" => null, "sub" => null],
        ["nama" => "Fungsionaris", "icon" => "bi bi-file-earmark-diff", "href" => getRoute('/main') . "?p=tampil-fungsionaris", "aktif" => null, "sub" => null],
        ["nama" => "Dosen", "icon" => "bi bi-file-person", "href" => getRoute('/main') . "?p=tampil-dosen", "aktif" => null, "sub" => null],
        ["nama" => "Prodi", "icon" => "bi bi-file-earmark-easel", "href" => getRoute('/main') . "?p=tampil-prodi", "aktif" => null, "sub" => null],
        ["nama" => "Master", "icon" => "bi bi-database", "href" => "#", "aktif" => null, "sub" => [
            ["nama" => "Data User", "href" => getRoute('main') . "?p=tampil-user"],
            ["nama" => "Data Role", "href" => getRoute('main') . "?p=tampil-role"],
            ["nama" => "Data Tag", "href" => getRoute('main') . "?p=tampil-tag"],
            ["nama" => "Data Type", "href" => getRoute('main') . "?p=tampil-type"],
            ["nama" => "Data Monev", "href" => getRoute('main') . "?p=tampil-monev"],
            ["nama" => "Data Akreditasi", "href" => getRoute('main') . "?p=tampil-akreditasi"],
        ]],
    ],
];
