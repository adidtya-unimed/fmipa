<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM prodi WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-prodi');
}

$row = mysqli_fetch_assoc($res);


$query1 = sprintf("SELECT * FROM jurusan ORDER BY `id` ASC");
$res1 = mysqli_query($conn, $query1);

?>

<script>
    document.title = "Prodi | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Prodi') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Prodi</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-prodi'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/prodi/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="jurusan">
                                <option selected disabled>Pilih Jurusan</option>
                                <?php if (mysqli_num_rows($res1) > 0) : ?>
                                    <?php while ($row1 = mysqli_fetch_assoc($res1)) : ?>
                                        <option value="<?= $row1['nama'] ?>" <?= $row1['nama'] == $row['jurusan'] ? 'selected' : '' ?>><?= $row1['nama'] ?></option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jenjang</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="jenjang">
                                <option selected disabled>Pilih Jenjang</option>
                                <option value="S1" <?= $row['jenjang'] == 'S1' ? 'selected' : '' ?>>S1</option>
                                <option value="S2" <?= $row['jenjang'] == 'S2' ? 'selected' : '' ?>>S2</option>
                                <option value="S3" <?= $row['jenjang'] == 'S3' ? 'selected' : '' ?>>S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Gelar</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="gelar">
                                <option selected disabled>Pilih Gelar</option>
                                <option value="S.Pd." <?= $row['gelar'] == 'S.Pd.' ? 'selected' : '' ?>>S.Pd.</option>
                                <option value="S.Mat." <?= $row['gelar'] == 'S.Mat.' ? 'selected' : '' ?>>S.Mat.</option>
                                <option value="S.Kom." <?= $row['gelar'] == 'S.Kom.' ? 'selected' : '' ?>>S.Kom.</option>
                                <option value="S.Stat." <?= $row['gelar'] == 'S.Stat.' ? 'selected' : '' ?>>S.Stat.</option>
                                <option value="S.Si." <?= $row['gelar'] == 'S.Si.' ? 'selected' : '' ?>>S.Si.</option>
                                <option value="M.Pd." <?= $row['gelar'] == 'M.Pd.' ? 'selected' : '' ?>>M.Pd.</option>
                                <option value="M.Si." <?= $row['gelar'] == 'M.Si.' ? 'selected' : '' ?>>M.Si.</option>
                                <option value="Dr." <?= $row['gelar'] == 'Dr.' ? 'selected' : '' ?>>Dr.</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Akreditasi</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="akreditasi">
                                <option selected disabled>Pilih Akreditasi</option>
                                <option value="A" <?= $row['akreditasi'] == 'A' ? 'selected' : '' ?>>A</option>
                                <option value="B" <?= $row['akreditasi'] == 'B' ? 'selected' : '' ?>>B</option>
                                <option value="C" <?= $row['akreditasi'] == 'C' ? 'selected' : '' ?>>C</option>
                                <option value="Unggul" <?= $row['akreditasi'] == 'Unggul' ? 'selected' : '' ?>>Unggul</option>
                                <option value="Baik Sekali" <?= $row['akreditasi'] == 'Baik Sekali' ? 'selected' : '' ?>>Baik Sekali</option>
                                <option value="Baik" <?= $row['akreditasi'] == 'Baik' ? 'selected' : '' ?>>Baik</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nomor SK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_sk" value="<?= $row['no_sk'] ?>" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Masa Berlaku Mulai</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="masa_berlaku_mulai" value="<?= $row['masa_berlaku_mulai'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Masa Berlaku Akhir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="masa_berlaku_akhir" value="<?= $row['masa_berlaku_akhir'] ?>" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Link Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="link_sertifikat" value="<?= $row['link_sertifikat'] ?>" required>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Update</button>
                </form>
            </div>
        </div>
    </div>
</div>