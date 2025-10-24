<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM event WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-event');
}

$row = mysqli_fetch_assoc($res);


?>

<script>
    document.title = "Event | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Event') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Event</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-event'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/event/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Event</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal" value="<?= $row['tanggal'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Tombol</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tombol" value="<?= $row['tombol'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link" value="<?= $row['link'] ?>">
                        </div>
                        <div class="form-text">&emsp; Inputkan link Google Drive</div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" rows="4"><?= $row['deskripsi'] ?></textarea>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Update</button>
                </form>
            </div>
        </div>
    </div>
</div>