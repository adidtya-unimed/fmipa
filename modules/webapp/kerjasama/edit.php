<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM kerjasama WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-kerjasama');
}

$row = mysqli_fetch_assoc($res);


?>

<script>
    document.title = "Kerjasama | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Kerjasama') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Kerjasama</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-kerjasama'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/kerjasama/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Kerjasama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_kerjasama" value="<?= $row['nama_kerjasama'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jenis Kerjasama</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="jenis" required>
                                <option selected disabled>Pilih Jenis</option>
                                <option value="MoA" <?= $row['jenis'] == 'MoA' ? 'selected' : '' ?>>MoA</option>
                                <option value="IA" <?= $row['jenis'] == 'IA' ? 'selected' : '' ?>>IA</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tanggal Kerjasama</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_kerjasama" value="<?= $row['tgl_kerjasama'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tingkat Kerjasama</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="tingkat" required>
                                <option selected disabled>Pilih Tingkat</option>
                                <option value="Nasional" <?= $row['tingkat'] == 'Nasional' ? 'selected' : '' ?>>Nasional</option>
                                <option value="Internasional" <?= $row['tingkat'] == 'Internasional' ? 'selected' : '' ?>>Internasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Mitra</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mitra" required value="<?= $row['mitra'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Kategori Tridharma</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="kategori" required>
                                <option selected disabled>Pilih Kategori</option>
                                <option value="Pendidikan" <?= $row['kategori'] == 'Pendidikan' ? 'selected' : '' ?>>Pendidikan</option>
                                <option value="Penelitian" <?= $row['kategori'] == 'Penelitian' ? 'selected' : '' ?>>Penelitian</option>
                                <option value="Pengabdian" <?= $row['kategori'] == 'Pengabdian' ? 'selected' : '' ?>>Pengabdian</option>
                                <option value="Lainnya" <?= $row['kategori'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                            </select>
                        </div>
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