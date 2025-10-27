<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
// Kode Program PHP
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
                <h6 class="card-title mb-4 mt-3">Tambah Data Dosen</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-dosen'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/dosen/create') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nidn" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nip" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keahlian" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="prodi">
                                <option selected disabled>Pilih prodi</option>
                                <?php if (mysqli_num_rows($res1) > 0) : ?>
                                    <?php while ($row1 = mysqli_fetch_assoc($res1)) : ?>
                                        <option value="<?= $row1['jenjang'] . ' ' . $row1['nama'] ?>"><?= $row1['jenjang'] . ' ' . $row1['nama'] ?></option>
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
                                        <option value="<?= $row2['nama'] ?>"><?= $row2['nama'] ?></option>
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
                                <option value="PNS">PNS</option>
                                <option value="PPPK">PPPK</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Golongan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="golongan">
                                <option selected disabled>Pilih Golongan</option>
                                <option value="III/b">III/b</option>
                                <option value="III/c">III/c</option>
                                <option value="III/d">III/d</option>
                                <option value="IV/a">IV/a</option>
                                <option value="IV/b">IV/b</option>
                                <option value="IV/c">IV/c</option>
                                <option value="IV/d">IV/d</option>
                                <option value="IV/e">IV/e</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Masa Kerja</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="masa_kerja" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="pendidikan">
                                <option selected disabled>Pilih Pendidikan</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="fungsional">
                                <option selected disabled>Pilih Jabatan Fungsional</option>
                                <option value="Profesor/Guru Besar">Profesor/Guru Besar</option>
                                <option value="Lektor Kepala">Kepala</option>
                                <option value="Lektor">Lektor</option>
                                <option value="Asisten Ahli">Asisten Ahli</option>
                                <option value="Belum Ada Jabatan">Belum Ada Jabatan</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Add</button>
                </form>
            </div>
        </div>
    </div>
</div>