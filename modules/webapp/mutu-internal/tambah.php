<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
// Kode Program PHP
?>

<script>
    document.title = "Mutu Internal | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Mutu Internal') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Tambah Data Mutu Internal</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-mutu-internal'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/mutu-internal/create') ?>" method="post">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Dokumen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="kategori" required>
                                <option selected disabled>Pilih Kategori</option>
                                <option value="Standar SPMI">Standar SPMI</option>
                                <option value="Manual SPMI">Manual SPMI</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="keterangan" required>
                                <option selected disabled>Pilih Keterangan</option>
                                <option value="Standar Pendidikan">Standar Pendidikan</option>
                                <option value="Standar Penelitian">Standar Penelitian</option>
                                <option value="Standar Pengabdian">Standar Pengabdian</option>
                                <option value="Standar Tambahan">Standar Tambahan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Link Dokumen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link_dokumen" required>
                        </div>
                        <div class="form-text">&emsp; Inputkan link Google Drive</div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Add</button>
                </form>
            </div>
        </div>
    </div>
</div>