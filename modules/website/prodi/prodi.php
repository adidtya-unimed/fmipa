<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
$query = "SELECT * FROM prodi WHERE `jurusan`='Matematika' ORDER BY id ASC";
$result = mysqli_query($conn, $query);

$query1 = "SELECT * FROM prodi WHERE `jurusan`='Fisika' ORDER BY id ASC";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT * FROM prodi WHERE `jurusan`='Kimia' ORDER BY id ASC";
$result2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM prodi WHERE `jurusan`='Biologi' ORDER BY id ASC";
$result3 = mysqli_query($conn, $query3);
?>
<!-- Start #main -->
<main class="main">
    <?php pageTitle('Program Studi FMIPA Unimed', 'Program Studi FMIPA'); ?>
    <section id="students-life" class="students-life section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="students-life-tabs mt-5" data-aos="fade-up" data-aos-delay="200">
                <ul class="nav nav-pills mb-4 justify-content-center" id="studentLifeTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="clubs-tab" data-bs-toggle="pill" data-bs-target="#matematika" type="button" role="tab" aria-controls="matematika" aria-selected="true">
                            <i class="bi bi-calculator"></i> Matematika
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="athletics-tab" data-bs-toggle="pill" data-bs-target="#fisika" type="button" role="tab" aria-controls="fisika" aria-selected="false">
                            <i class="bi bi-thermometer"></i> Fisika
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="facilities-tab" data-bs-toggle="pill" data-bs-target="#kimia" type="button" role="tab" aria-controls="kimia" aria-selected="false">
                            <i class="bi bi-flask"></i> Kimia
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#biologi" type="button" role="tab" aria-controls="biologi" aria-selected="false">
                            <i class="bi bi-flower3"></i> Biologi
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="studentLifeTabsContent">
                    <div class="tab-pane fade show active" id="matematika" role="tabpanel" aria-labelledby="matematika-tab">
                        <section id="events-2" class="events-2 section">
                            <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: -5em;">

                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="events-list">
                                            <?php
                                            if (mysqli_num_rows($result) > 0) :
                                                $no = 1;
                                                $delay = 0;
                                                while ($row = mysqli_fetch_assoc($result)) :
                                            ?>
                                                    <div class="event-item" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                                        <div class="event-date">
                                                            <span class="month">#</span>
                                                            <span class="day"><?= $no ?></span>
                                                        </div>
                                                        <div class="event-content">
                                                            <h3><?= strtoupper($row['nama']) ?></h3>
                                                            <div class="event-meta">
                                                                <p><i class="bi bi-building"></i> Jenjang: <strong><?= $row['jenjang'] ?></strong></p>
                                                                <p><i class="bi bi-mortarboard"></i> Gelar: <strong><?= $row['gelar'] ?></strong></p>
                                                            </div>
                                                            <table class="table">
                                                                <tr>
                                                                    <td width="150">Jurusan</td>
                                                                    <td width="10">:</td>
                                                                    <td><strong><?= $row['jurusan'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Akreditasi</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row['akreditasi'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. SK</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row['no_sk'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Masa Berlaku</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= getTanggal2($row['masa_berlaku_mulai']) ?> s.d <?= getTanggal2($row['masa_berlaku_akhir']) ?></strong></td>
                                                                </tr>
                                                            </table>
                                                            <a href="<?= $row['link_sertifikat'] ?>" class="btn-event" target="_blank">Sertifikat <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div><!-- End Event Item -->
                                            <?php
                                                    $no++;
                                                    $delay += 100;
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- /Events 2 Section -->
                    </div>

                    <div class="tab-pane fade" id="fisika" role="tabpanel" aria-labelledby="fisika-tab">
                        <section id="events-2" class="events-2 section">
                            <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: -5em;">

                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="events-list">
                                            <?php
                                            if (mysqli_num_rows($result1) > 0) :
                                                $no = 1;
                                                $delay = 0;
                                                while ($row1 = mysqli_fetch_assoc($result1)) :
                                            ?>
                                                    <div class="event-item" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                                        <div class="event-date">
                                                            <span class="month">#</span>
                                                            <span class="day"><?= $no ?></span>
                                                        </div>
                                                        <div class="event-content">
                                                            <h3><?= strtoupper($row1['nama']) ?></h3>
                                                            <div class="event-meta">
                                                                <p><i class="bi bi-building"></i> Jenjang: <strong><?= $row1['jenjang'] ?></strong></p>
                                                                <p><i class="bi bi-mortarboard"></i> Gelar: <strong><?= $row1['gelar'] ?></strong></p>
                                                            </div>
                                                            <table class="table">
                                                                <tr>
                                                                    <td width="150">Jurusan</td>
                                                                    <td width="10">:</td>
                                                                    <td><strong><?= $row1['jurusan'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Akreditasi</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row1['akreditasi'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. SK</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row1['no_sk'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Masa Berlaku</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= getTanggal2($row1['masa_berlaku_mulai']) ?> s.d <?= getTanggal2($row1['masa_berlaku_akhir']) ?></strong></td>
                                                                </tr>
                                                            </table>
                                                            <a href="<?= $row1['link_sertifikat'] ?>" class="btn-event" target="_blank">Sertifikat <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div><!-- End Event Item -->
                                            <?php
                                                    $no++;
                                                    $delay += 100;
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- /Events 2 Section -->
                    </div>

                    <div class="tab-pane fade" id="kimia" role="tabpanel" aria-labelledby="kimia-tab">
                        <section id="events-2" class="events-2 section">
                            <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: -5em;">

                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="events-list">
                                            <?php
                                            if (mysqli_num_rows($result2) > 0) :
                                                $no = 1;
                                                $delay = 0;
                                                while ($row2 = mysqli_fetch_assoc($result2)) :
                                            ?>
                                                    <div class="event-item" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                                        <div class="event-date">
                                                            <span class="month">#</span>
                                                            <span class="day"><?= $no ?></span>
                                                        </div>
                                                        <div class="event-content">
                                                            <h3><?= strtoupper($row2['nama']) ?></h3>
                                                            <div class="event-meta">
                                                                <p><i class="bi bi-building"></i> Jenjang: <strong><?= $row2['jenjang'] ?></strong></p>
                                                                <p><i class="bi bi-mortarboard"></i> Gelar: <strong><?= $row2['gelar'] ?></strong></p>
                                                            </div>
                                                            <table class="table">
                                                                <tr>
                                                                    <td width="150">Jurusan</td>
                                                                    <td width="10">:</td>
                                                                    <td><strong><?= $row2['jurusan'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Akreditasi</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row2['akreditasi'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. SK</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row2['no_sk'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Masa Berlaku</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= getTanggal2($row2['masa_berlaku_mulai']) ?> s.d <?= getTanggal2($row2['masa_berlaku_akhir']) ?></strong></td>
                                                                </tr>
                                                            </table>
                                                            <a href="<?= $row2['link_sertifikat'] ?>" class="btn-event" target="_blank">Sertifikat <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div><!-- End Event Item -->
                                            <?php
                                                    $no++;
                                                    $delay += 100;
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- /Events 2 Section -->
                    </div>

                    <div class="tab-pane fade" id="biologi" role="tabpanel" aria-labelledby="biologi-tab">
                        <section id="events-2" class="events-2 section">
                            <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: -5em;">

                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="events-list">
                                            <?php
                                            if (mysqli_num_rows($result3) > 0) :
                                                $no = 1;
                                                $delay = 0;
                                                while ($row3 = mysqli_fetch_assoc($result3)) :
                                            ?>
                                                    <div class="event-item" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                                        <div class="event-date">
                                                            <span class="month">#</span>
                                                            <span class="day"><?= $no ?></span>
                                                        </div>
                                                        <div class="event-content">
                                                            <h3><?= strtoupper($row3['nama']) ?></h3>
                                                            <div class="event-meta">
                                                                <p><i class="bi bi-building"></i> Jenjang: <strong><?= $row3['jenjang'] ?></strong></p>
                                                                <p><i class="bi bi-mortarboard"></i> Gelar: <strong><?= $row3['gelar'] ?></strong></p>
                                                            </div>
                                                            <table class="table">
                                                                <tr>
                                                                    <td width="150">Jurusan</td>
                                                                    <td width="10">:</td>
                                                                    <td><strong><?= $row3['jurusan'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Akreditasi</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row3['akreditasi'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. SK</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= $row3['no_sk'] ?></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Masa Berlaku</td>
                                                                    <td>:</td>
                                                                    <td><strong><?= getTanggal2($row3['masa_berlaku_mulai']) ?> s.d <?= getTanggal2($row3['masa_berlaku_akhir']) ?></strong></td>
                                                                </tr>
                                                            </table>
                                                            <a href="<?= $row3['link_sertifikat'] ?>" class="btn-event" target="_blank">Sertifikat <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div><!-- End Event Item -->
                                            <?php
                                                    $no++;
                                                    $delay += 100;
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- /Events 2 Section -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Students Life Section -->
</main>