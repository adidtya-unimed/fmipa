<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
$query = sprintf("SELECT * FROM jurusan ORDER BY `id` ASC");
$res = mysqli_query($conn, $query);
?>

<script>
    document.title = "Prodi | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Prodi') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Tambah Data Prodi</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tampil-prodi'); ?>" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                </div>
                <form action="<?= getRoute('/prodi/create') ?>" method="post">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="jurusan">
                                <option selected disabled>Pilih Jurusan</option>
                                <?php if (mysqli_num_rows($res) > 0) : ?>
                                    <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                                        <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
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
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Gelar</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="gelar">
                                <option selected disabled>Pilih Gelar</option>
                                <option value="S.Pd.">S.Pd.</option>
                                <option value="S.Mat.">S.Mat.</option>
                                <option value="S.Kom.">S.Kom.</option>
                                <option value="S.Stat.">S.Stat.</option>
                                <option value="S.Si.">S.Si.</option>
                                <option value="M.Pd.">M.Pd.</option>
                                <option value="M.Si.">M.Si.</option>
                                <option value="Dr.">Dr.</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Akreditasi</label>
                        <div class="col-sm-10">
                            <select class="form-select select2-example" name="akreditasi">
                                <option selected disabled>Pilih Akreditasi</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="Unggul">Unggul</option>
                                <option value="Baik Sekali">Baik Sekali</option>
                                <option value="Baik">Baik</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nomor SK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_sk" autofocus required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Masa Berlaku Mulai</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="masa_berlaku_mulai" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Masa Berlaku Akhir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="masa_berlaku_akhir" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Link Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" name="link_sertifikat" placeholder="https://drive.google.com/..." required>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">+ Add</button>
                </form>
            </div>
        </div>
    </div>
</div>