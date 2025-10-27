<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php

if (!ifGET('id')) {
    redirect('/main');
}
$input = real_escape($_GET['id'], $conn);
$query = sprintf("SELECT * FROM dosen WHERE `id`='%s'", $input);
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) != 1) {
    redirect('/main?p=tampil-dosen');
}

$row = mysqli_fetch_assoc($res);

$query1 = sprintf("SELECT * FROM prodi ORDER BY `id` ASC");
$res1 = mysqli_query($conn, $query1);

$query2 = sprintf("SELECT * FROM jurusan ORDER BY `id` ASC");
$res2 = mysqli_query($conn, $query2);
?>

<script>
    document.title = "Dosen | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Dosen') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Edit Data Dosen</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-dosen'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/dosen/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nidn" value="<?= $row['nidn'] ?>" autofocus required>
                        </div>
                    </div>
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
                        <label for="" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keahlian" value="<?= $row['keahlian'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="prodi">
                                <option selected disabled>Pilih prodi</option>
                                <?php if (mysqli_num_rows($res1) > 0) : ?>
                                    <?php while ($row1 = mysqli_fetch_assoc($res1)) : ?>
                                        <option value="<?= $row1['nama'] ?>" <?= $row1['nama'] == $row['prodi'] ? 'selected' : '' ?>><?= $row1['nama'] ?></option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="jurusan">
                                <option selected disabled>Pilih Jurusan</option>
                                <?php if (mysqli_num_rows($res2) > 0) : ?>
                                    <?php while ($row2 = mysqli_fetch_assoc($res2)) : ?>
                                        <option value="<?= $row2['nama'] ?>" <?= $row2['nama'] == $row['jurusan'] ? 'selected' : '' ?>><?= $row2['nama'] ?></option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="status">
                                <option selected disabled>Pilih Status</option>
                                <option value="PNS" <?= $row['status'] == 'PNS' ? 'selected' : '' ?>>PNS</option>
                                <option value="PPPK" <?= $row['status'] == 'PPPK' ? 'selected' : '' ?>>PPPK</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Golongan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="golongan">
                                <option selected disabled>Pilih Golongan</option>
                                <option value="III/b" <?= $row['golongan'] == 'III/b' ? 'selected' : '' ?>>III/b</option>
                                <option value="III/c" <?= $row['golongan'] == 'III/c' ? 'selected' : '' ?>>III/c</option>
                                <option value="III/d" <?= $row['golongan'] == 'III/d' ? 'selected' : '' ?>>III/d</option>
                                <option value="IV/a" <?= $row['golongan'] == 'IV/a' ? 'selected' : '' ?>>IV/a</option>
                                <option value="IV/b" <?= $row['golongan'] == 'IV/b' ? 'selected' : '' ?>>IV/b</option>
                                <option value="IV/c" <?= $row['golongan'] == 'IV/c' ? 'selected' : '' ?>>IV/c</option>
                                <option value="IV/d" <?= $row['golongan'] == 'IV/d' ? 'selected' : '' ?>>IV/d</option>
                                <option value="IV/e" <?= $row['golongan'] == 'IV/e' ? 'selected' : '' ?>>IV/e</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Masa Kerja</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="masa_kerja" value="<?= $row['masa_kerja'] ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="pendidikan">
                                <option selected disabled>Pilih Pendidikan</option>
                                <option value="S2" <?= $row['pendidikan'] == 'S2' ? 'selected' : '' ?>>S2</option>
                                <option value="S3" <?= $row['pendidikan'] == 'S2' ? 'selected' : '' ?>>S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="fungsional">
                                <option selected disabled>Pilih Jabatan Fungsional</option>
                                <option value="Profesor/Guru Besar" <?= $row['fungsional'] == 'Profesor/Guru Besar' ? 'selected' : '' ?>>Profesor/Guru Besar</option>
                                <option value="Lektor Kepala" <?= $row['fungsional'] == 'Lektor Kepala' ? 'selected' : '' ?>>Kepala</option>
                                <option value="Lektor" <?= $row['fungsional'] == 'Lektor' ? 'selected' : '' ?>>Lektor</option>
                                <option value="Asisten Ahli" <?= $row['fungsional'] == 'Asisten Ahli' ? 'selected' : '' ?>>Asisten Ahli</option>
                                <option value="Belum Ada Jabatan" <?= $row['fungsional'] == 'Belum Ada Jabatan' ? 'selected' : '' ?>>Belum Ada Jabatan</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Update</button>
                </form>
            </div>
        </div>
    </div>
</div>