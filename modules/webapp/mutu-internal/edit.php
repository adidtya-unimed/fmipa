<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM mutu_internal WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-mutu-internal');
}

$row = mysqli_fetch_assoc($res);


?>

<script>
    document.title = "Mutu Internal | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Mutu Internal') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Mutu Internal</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-mutu-internal'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/mutu-internal/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Dokumen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" autofocus>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="kategori" required>
                                <option selected disabled>Pilih Status</option>
                                <option value="Standar SPMI" <?= $row['kategori'] == 'Standar SPMI' ? 'selected' : '' ?>>Standar SPMI</option>
                                <option value="Manual SPMI" <?= $row['kategori'] == 'Manual SPMI' ? 'selected' : '' ?>>Manual SPMI</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                        <select class="form-select select2-example" name="keterangan" required>
                            <option selected disabled>Pilih Keterangan</option>
                            <option value="Standar Pendidikan" <?= $row['keterangan'] == 'Standar Pendidikan' ? 'selected' : '' ?>>Standar Pendidikan</option>
                            <option value="Standar Penelitian" <?= $row['keterangan'] == 'Standar Penelitian' ? 'selected' : '' ?>>Standar Penelitian</option>
                            <option value="Standar Pengabdian" <?= $row['keterangan'] == 'Standar Pengabdian' ? 'selected' : '' ?>>Standar Pengabdian</option>
                            <option value="Standar Tambahan" <?= $row['keterangan'] == 'Standar Tambahan' ? 'selected' : '' ?>>Standar Tambahan</option>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Link Dokumen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link_dokumen" value="<?= $row['link_dokumen'] ?>">
                        </div>
                        <div class="form-text">&emsp; Inputkan link Google Drive</div>
                    </div>


                    <button type="submit" name="submit" class="btn btn-primary">+ Update</button>
                </form>
            </div>
        </div>
    </div>
</div>