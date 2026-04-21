<?php defined('FMIPA_APP') or exit('Forbidden...!') ?>

<?php
$query = "SELECT * FROM kerjasama ORDER BY `id` ASC";
$res = mysqli_query($conn, $query);
?>

<script>
    document.title = "Kerjasama | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Kerjasama') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Data Kerjasama</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tambah-kerjasama'); ?>" class="btn btn-primary me-1 mb-1">Tambah</a>
                    </div>
                </div>
                <table id="table1" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Tanggal</th>
                            <th>Tingkat</th>
                            <th>Link</th>
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
                                    <td><?= $row['nama_kerjasama'] ?></td>
                                    <td><?= $row['jenis'] ?></td>
                                    <td><?= $row['tgl_kerjasama'] ?></td>
                                    <td><?= $row['tingkat'] ?></td>
                                    <td><a href="<?= $row['link_dokumen'] ?>" target="_blank"><i class="bi bi-file-earmark-pdf"></i> Dokumen</a></td>
                                    <td>
                                        <a href="<?= getRoute('/main?p=edit-kerjasama&id=' . $row['id']); ?>" class="badge bg-success"><i class="bi bi-pencil-square"></i></a>
                                        <a id="link-hapus" href="<?= getRoute('/kerjasama/delete?id=' . $row['id']); ?>" class="badge bg-danger" onclick="confirmDelete(event, this);"><i class="bi bi-file-earmark-x"></i></a>

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