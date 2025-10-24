<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
$query1 = "SELECT * FROM fungsionaris WHERE `penempatan` = 'DEKANAT' ORDER BY level ASC";
$res1 = mysqli_query($conn, $query1);

$query2 = "SELECT * FROM fungsionaris WHERE `penempatan` = 'MATEMATIKA' ORDER BY level ASC";
$res2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM fungsionaris WHERE `penempatan` = 'FISIKA' ORDER BY level ASC";
$res3 = mysqli_query($conn, $query3);

$query4 = "SELECT * FROM fungsionaris WHERE `penempatan` = 'KIMIA' ORDER BY level ASC";
$res4 = mysqli_query($conn, $query4);

$query5 = "SELECT * FROM fungsionaris WHERE `penempatan` = 'BIOLOGI' ORDER BY level ASC";
$res5 = mysqli_query($conn, $query5);

$query6 = "SELECT * FROM fungsionaris WHERE `penempatan` = 'GPM' ORDER BY level ASC";
$res6 = mysqli_query($conn, $query6);
?>


<!-- Start #main -->
<main class="main">
    <?php pageTitle('Fungsionaris FMIPA', 'Fungsionaris'); ?>

    <section id="faculty--staff" class="faculty--staff section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="departments-nav">
                        <h4 class="departments-title">FMIPA UNIMED</h4>
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-1">Dekanat</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-2">Matematika</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-3">Fisika</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-4">Kimia</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-5">Biologi</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-6">GPM</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9" data-aos="fade-up" data-aos-delay="400">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="faculty--staff-tab-1">
                            <div class="department-info mb-4">
                                <h3>DEKANAT</h3>
                                <p>Fungsionaris Di Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
                            </div>
                            <div class="row g-4">
                                <?php
                                if (mysqli_num_rows($res1) > 0) :
                                    $no = 1;
                                    while ($row1 = mysqli_fetch_assoc($res1)) :
                                ?>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="faculty-card">
                                                <div class="faculty-image">
                                                    <img src="storage/fungsionaris/<?php echo $row1['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                </div>
                                                <div class="faculty-info">
                                                    <h4><?php echo $row1['nama']; ?></h4>
                                                    <p class="faculty-title"><?php echo $row1['jabatan']; ?></p>
                                                    <div class="faculty-specialties">
                                                        <span><?php echo $row1['bidang']; ?></span>
                                                    </div>
                                                    <div class="faculty-contact">
                                                        <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                        <a href="#" class="profile-link"><i class="bi bi-telephone"></i> Contact</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $no++;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="faculty--staff-tab-2">
                            <div class="department-info mb-4">
                                <h3>Jurusan Matematika</h3>
                                <p></p>
                            </div>
                            <div class="row g-4">
                                <div class="row g-4">
                                    <?php
                                    if (mysqli_num_rows($res2) > 0) :
                                        $no = 1;
                                        while ($row2 = mysqli_fetch_assoc($res2)) :
                                    ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="faculty-card">
                                                    <div class="faculty-image">
                                                        <img src="storage/fungsionaris/<?php echo $row2['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                    </div>
                                                    <div class="faculty-info">
                                                        <h4><?php echo $row2['nama']; ?></h4>
                                                        <p class="faculty-title"><?php echo $row2['jabatan']; ?></p>
                                                        <div class="faculty-specialties">
                                                            <span><?php echo $row2['bidang']; ?></span>
                                                        </div>
                                                        <div class="faculty-contact">
                                                            <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                            <a href="#" class="profile-link"><i class="bi bi-telephone"></i> Contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            $no++;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="faculty--staff-tab-3">
                            <div class="department-info mb-4">
                                <h3>Jurusan Fisika</h3>
                                <p></p>
                            </div>
                            <div class="row g-4">
                                <div class="row g-4">
                                    <?php
                                    if (mysqli_num_rows($res3) > 0) :
                                        $no = 1;
                                        while ($row3 = mysqli_fetch_assoc($res3)) :
                                    ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="faculty-card">
                                                    <div class="faculty-image">
                                                        <img src="storage/fungsionaris/<?php echo $row3['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                    </div>
                                                    <div class="faculty-info">
                                                        <h4><?php echo $row3['nama']; ?></h4>
                                                        <p class="faculty-title"><?php echo $row3['jabatan']; ?></p>
                                                        <div class="faculty-specialties">
                                                            <span><?php echo $row3['bidang']; ?></span>
                                                        </div>
                                                        <div class="faculty-contact">
                                                            <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                            <a href="#" class="profile-link"><i class="bi bi-telephone"></i> Contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            $no++;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="faculty--staff-tab-4">
                            <div class="department-info mb-4">
                                <h3>Jurusan Kimia</h3>
                                <p></p>
                            </div>
                            <div class="row g-4">
                                <div class="row g-4">
                                    <?php
                                    if (mysqli_num_rows($res4) > 0) :
                                        $no = 1;
                                        while ($row4 = mysqli_fetch_assoc($res4)) :
                                    ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="faculty-card">
                                                    <div class="faculty-image">
                                                        <img src="storage/fungsionaris/<?php echo $row4['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                    </div>
                                                    <div class="faculty-info">
                                                        <h4><?php echo $row4['nama']; ?></h4>
                                                        <p class="faculty-title"><?php echo $row4['jabatan']; ?></p>
                                                        <div class="faculty-specialties">
                                                            <span><?php echo $row4['bidang']; ?></span>
                                                        </div>
                                                        <div class="faculty-contact">
                                                            <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                            <a href="#" class="profile-link"><i class="bi bi-telephone"></i> Contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            $no++;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="faculty--staff-tab-5">
                            <div class="department-info mb-4">
                                <h3>Jurusan Biologi</h3>
                                <p></p>
                            </div>
                            <div class="row g-4">
                                <div class="row g-4">
                                    <?php
                                    if (mysqli_num_rows($res5) > 0) :
                                        $no = 1;
                                        while ($row5 = mysqli_fetch_assoc($res5)) :
                                    ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="faculty-card">
                                                    <div class="faculty-image">
                                                        <img src="storage/fungsionaris/<?php echo $row5['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                    </div>
                                                    <div class="faculty-info">
                                                        <h4><?php echo $row5['nama']; ?></h4>
                                                        <p class="faculty-title"><?php echo $row5['jabatan']; ?></p>
                                                        <div class="faculty-specialties">
                                                            <span><?php echo $row5['bidang']; ?></span>
                                                        </div>
                                                        <div class="faculty-contact">
                                                            <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                            <a href="#" class="profile-link"><i class="bi bi-telephone"></i> Contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            $no++;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="faculty--staff-tab-6">
                            <div class="department-info mb-4">
                                <h3>Gugus Penjaminan Mutu Fakultas (GPM)</h3>
                                <p></p>
                            </div>
                            <div class="row g-4">
                                <div class="row g-4">
                                    <?php
                                    if (mysqli_num_rows($res6) > 0) :
                                        $no = 1;
                                        while ($row6 = mysqli_fetch_assoc($res6)) :
                                    ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="faculty-card">
                                                    <div class="faculty-image">
                                                        <img src="storage/fungsionaris/<?php echo $row6['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                    </div>
                                                    <div class="faculty-info">
                                                        <h4><?php echo $row6['nama']; ?></h4>
                                                        <p class="faculty-title"><?php echo $row6['jabatan']; ?></p>
                                                        <div class="faculty-specialties">
                                                            <span><?php echo $row6['bidang']; ?></span>
                                                        </div>
                                                        <div class="faculty-contact">
                                                            <a href="mailto:swilson@example.com"><i class="bi bi-envelope"></i> Email</a>
                                                            <a href="#" class="profile-link"><i class="bi bi-telephone"></i> Contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            $no++;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </section><!-- /Faculty  Staff Section -->


</main>