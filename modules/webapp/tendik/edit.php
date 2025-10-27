<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM tendik WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-tendik');
}

$row = mysqli_fetch_assoc($res);

?>

<script>
    document.title = "Tendik | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Tendik') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Tendik</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-tendik'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/tendik/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nip" value="<?= $row['nip'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Penempatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penempatan" value="<?= $row['penempatan'] ?>" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="status">
                                <option selected disabled>Pilih Status</option>
                                <option value="PNS" <?= $row['status'] == 'PNS' ? 'selected' : '' ?>>PNS</option>
                                <option value="PPPK" <?= $row['status'] == 'PPPK' ? 'selected' : '' ?>>PPPK</option>
                                <option value="PHL" <?= $row['status'] == 'PHL' ? 'selected' : '' ?>>PHL</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="foto_lama" value="<?= $row['foto'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Update</button>
                </form>
            </div>
        </div>
    </div>
</div>