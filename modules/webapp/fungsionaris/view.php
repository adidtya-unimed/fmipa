<?php defined('FMIPA_APP') or exit('Forbidden...!') ?>

<?php
$query = "SELECT * FROM fungsionaris ORDER BY penempatan, level ASC";
$res = mysqli_query($conn, $query);
?>

<script>
    document.title = "Fungsionaris | <?= getConfig('APP_NAME') ?>"
</script>

<div class="layout-wrapper">
    <?php header_tampil('Fungsionaris') ?>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4 mt-3">Data Fungsionaris</h6>
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex justify-content-start">
                        <a href="<?= getRoute('/main?p=tambah-fungsionaris'); ?>" class="btn btn-primary me-1 mb-1">Tambah</a>
                    </div>
                </div>
                <table id="table1" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Penempatan</th>
                            <th>Bidang</th>
                            <th>Foto</th>
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
                                    <td><?= $row['jabatan'] ?></td>
                                    <td><?= $row['penempatan'] ?></td>
                                    <td><?= $row['bidang'] ?></td>
                                    <td><img src="storage/fungsionaris/<?= $row['foto'] ?>" alt="Foto Fungsionaris" width="50"></td>
                                    <td>
                                        <a href="<?= getRoute('/main?p=edit-fungsionaris&id=' . $row['id']); ?>" class="badge bg-success"><i class="bi bi-pencil-square"></i></a>
                                        <a id="link-hapus" href="<?= getRoute('/fungsionaris/delete?id=' . $row['id']); ?>" class="badge bg-danger" onclick="confirmDelete(event, this);"><i class="bi bi-file-earmark-x"></i></a>

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