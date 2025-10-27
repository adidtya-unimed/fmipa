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
        ["nama" => "Profil", "icon" => "bi bi-person-circle", "href" => "#", "aktif" => null, "sub" => [
            ["nama" => "Event", "href" => getRoute('main') . "?p=tampil-event"],
            ["nama" => "Fungsionaris", "href" => getRoute('main') . "?p=tampil-fungsionaris"],
            ["nama" => "Dosen", "href" => getRoute('main') . "?p=tampil-dosen"],
            ["nama" => "Tendik", "href" => getRoute('main') . "?p=tampil-tendik"],
        ]],
        ["nama" => "Akademik", "icon" => "bi bi-journal-bookmark", "href" => "#", "aktif" => null, "sub" => [
            ["nama" => "Program Studi", "href" => getRoute('main') . "?p=tampil-prodi"],
        ]],
        // ["nama" => "Event", "icon" => "bi bi-archive", "href" => getRoute('/main') . "?p=tampil-event", "aktif" => null, "sub" => null],
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
