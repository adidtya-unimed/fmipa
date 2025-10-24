<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<script>
    document.title = "Dashboard | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Dashboard') ?>

    <div class="content">
        <div class="profile-cover bg-image mb-4" data-image="assets/webapp/images/profile-bg.jpg">
            <div class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
                <div class="avatar avatar-xl me-3">
                    <img src="assets/webapp/images/user/user.png" class="rounded-circle" alt="...">
                </div>
                <div class="my-4 my-md-0">
                    <h3 class="mb-1"><?= getsession('nama') ?></h3>
                    <small><?= getsession('role') ?></small>
                </div>
                <div class="ms-md-auto me-4 board-text">
                    <h1>Selamat Datang</h1>
                    <h5>Di Aplikasi</h5>
                    <h2>SIMMIPA</h2>
                    <p>Sistem Informasi Manajemen
                        <br>Fakultas Matematika dan Ilmu Pengetahuan Alam<br>Universitas Negeri Medan
                    </p>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="row row-vertical-border text-center">
                    <div class="col-4 text-warning">
                        <h3>#</h3>
                        <span>Jumlah Dosen</span>
                    </div>
                    <div class="col-4 text-info">
                        <h3>#</h3>
                        <span>Dosen S2</span>
                    </div>
                    <div class="col-4 text-success">
                        <h3>#</h3>
                        <span>Dosen S3</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row row-vertical-border text-center">
                    <div class="col-4 text-primary">
                        <h3>#</h3>
                        <span>Guru Besar</span>
                    </div>
                    <div class="col-4 text-danger">
                        <h3>#</h3>
                        <span>Jumlah Mahasiswa</span>
                    </div>
                    <div class="col-4 text-secondary">
                        <h3>#</h3>
                        <span>Jumlah Dokumen</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>