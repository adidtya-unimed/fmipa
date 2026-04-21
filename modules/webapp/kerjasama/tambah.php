<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
// Kode Program PHP
?>

<script>
    document.title = "Kerjasama | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Kerjasama') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Tambah Data Kerjasama</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-kerjasama'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/kerjasama/create') ?>" method="post">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Kerjasama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_kerjasama" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jenis Kerjasama</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="jenis" required>
                                <option selected disabled>Pilih Jenis</option>
                                <option value="MoA">MoA</option>
                                <option value="IA">IA</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Kerjasama</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_kerjasama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tingkat Kerjasama</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="tingkat" required>
                                <option selected disabled>Pilih Tingkat</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Mitra</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mitra" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kategori Tridharma</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="kategori" required>
                                <option selected disabled>Pilih Kategori</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Penelitian">Penelitian</option>
                                <option value="Pengabdian">Pengabdian</option>
                                <option value="Lainnya">Lainnya</option>
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