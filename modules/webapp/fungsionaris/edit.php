<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM fungsionaris WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-fungsionaris');
}

$row = mysqli_fetch_assoc($res);


?>

<script>
    document.title = "Fungsionaris | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Fungsionaris') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Fungsionaris</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-fungsionaris'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/fungsionaris/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" value="<?= $row['jabatan'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Penempatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penempatan" value="<?= $row['penempatan'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bidang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bidang" value="<?= $row['bidang'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kontak</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kontak" value="<?= $row['kontak'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="level" value="<?= $row['level'] ?>" autofocus>
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