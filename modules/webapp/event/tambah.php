<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
// Kode Program PHP
?>

<script>
    document.title = "Event | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Event') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Tambah Data Event</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-event'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/event/create') ?>" method="post">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Event</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Tombol</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tombol" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link" required>
                        </div>
                        <div class="form-text">&emsp; Inputkan link Google Drive</div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" rows="4"></textarea>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Add</button>
                </form>
            </div>
        </div>
    </div>
</div>