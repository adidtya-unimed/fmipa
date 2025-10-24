<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
// Kode Program PHP
?>

<script>
    document.title = "Fungsionaris | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Fungsionaris') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Tambah Data Fungsionaris</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-fungsionaris'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/fungsionaris/create') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Penempatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penempatan" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bidang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bidang" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kontak</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kontak" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="level" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Add</button>
                </form>
            </div>
        </div>
    </div>
</div>