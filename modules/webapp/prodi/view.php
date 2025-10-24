<?php defined('FMIPA_APP') or exit('Forbidden...!') ?>

<?php
$query = "SELECT * FROM prodi ORDER BY id DESC";
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
                <h6 class="card-title mb-4 mt-3">Data Prodi</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tambah-prodi'); ?>" class="btn btn-primary me-1 mb-1">Tambah</a>
                    </div>
                </div>
                <table id="table1" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Jenjang</th>
                            <th>Gelar</th>
                            <th>Akreditasi</th>
                            <th>Masa Berlaku</th>
                            <th>Sertifikat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($res) > 0) :
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($res)) :
                        ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['jurusan'] ?></td>
                                    <td><?= $row['jenjang'] ?></td>
                                    <td><?= $row['gelar'] ?></td>
                                    <td><?= $row['akreditasi'] ?></td>
                                    <td><?= getTanggal($row['masa_berlaku_mulai']) ?> s.d <?= getTanggal($row['masa_berlaku_akhir']) ?></td>
                                    <td><a href="<?= $row['link_sertifikat'] ?>" target="_blank">Sertifikat</a></td>
                                    <td>
                                        <a href="<?= getRoute('/main?p=edit-prodi&id=' . $row['id']); ?>" class="badge bg-success"><i class="bi bi-pencil-square"></i></a>
                                        <a id="link-hapus" href="<?= getRoute('/prodi/delete?id=' . $row['id']); ?>" class="badge bg-danger" onclick="confirmDelete(event, this);"><i class="bi bi-file-earmark-x"></i></a>

                                    </td>
                                </tr>
                        <?php
                                $no++;
                            endwhile;
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>