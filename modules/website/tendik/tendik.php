<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
$query1 = "SELECT * FROM tendik ORDER BY `status`, `id` ASC";
$res1 = mysqli_query($conn, $query1);
?>


<!-- Start #main -->
<main class="main">
    <?php pageTitle('Tendik FMIPA', 'Tendik'); ?>

    <section id="faculty--staff" class="faculty--staff section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <!-- <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="departments-nav">
                        <h4 class="departments-title">FMIPA UNIMED</h4>
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faculty--staff-tab-2">Matematika</button>
                            </li>
                        </ul>
                    </div>
                </div> -->

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-content">

                        <div>
                            <div class="department-info mb-4">
                                <h3>Tenaga Kependidikan FMIPA Unimed</h3>
                                <p></p>
                            </div>
                            <div class="row g-4">
                                <div class="row g-4">
                                    <?php
                                    if (mysqli_num_rows($res1) > 0) :
                                        $no = 1;
                                        while ($row2 = mysqli_fetch_assoc($res1)) :
                                    ?>
                                            <div class="col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                                                <div class="faculty-card">
                                                    <div class="faculty-image1">
                                                        <img src="storage/tendik/<?php echo $row2['foto']; ?>" class="img-fluid" alt="Faculty Member">
                                                    </div>
                                                    <div class="faculty-info">
                                                        <p><strong><?php echo $row2['nama']; ?></strong></p>
                                                        <p class="faculty-title"><?php echo $row2['nip']; ?></p>
                                                        <div class="faculty-specialties">
                                                            <span><?php echo $row2['penempatan']; ?> | <?php echo $row2['status']; ?></span>
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