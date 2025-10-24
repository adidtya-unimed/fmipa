<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
$query = "SELECT * FROM event ORDER BY tanggal ASC LIMIT 3";
$res = mysqli_query($conn, $query);
?>

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div class="hero-container">
            <video autoplay="" muted="" loop="" playsinline="" class="video-background">
                <source src="assets/website/img/education/video-1.mp4" type="video/mp4">
            </video>
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
                        <div class="hero-content">
                            <h1 style="text-transform: uppercase;">Selamat Datang</h1>
                            <h2 style="text-transform: uppercase;">Di Fakultas Matematika dan Ilmu Pengetahuan Alam</h2>
                            <br>
                            <p>Tempat terbaik untuk menimba ilmu dan mengembangkan potensi Anda. FMIPA UNIMED adalah tempat yang ideal untuk mengeksplorasi dan mengembangkan potensi Anda di bidang sains dan teknologi.</p>
                            <div class="cta-buttons">
                                <a href="#" class="btn-primary">Mulailah Bergabung</a>
                                <a href="#" class="btn-secondary">Jelajahi Program</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                        <div class="stats-card">
                            <div class="stats-header">
                                <h3>Mengapa FMIPA UNIMED?</h3>
                                <div class="decoration-line"></div>
                            </div>
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h4>5694</h4>
                                        <p>Mahasiswa</p>
                                    </div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="bi bi-person-raised-hand"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h4>269</h4>
                                        <p>Dosen</p>
                                    </div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="bi bi-building"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h4>19</h4>
                                        <p>Program Studi</p>
                                    </div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h4>10000+</h4>
                                        <p>Alumni</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="event-ticker">
            <div class="container">
                <div class="row gy-4">
                    <?php
                    if (mysqli_num_rows($res) > 0) :
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($res)) :
                    ?>
                            <div class="col-md-6 col-xl-4 col-12 ticker-item">
                                <span class="date"><?= strtoupper(date('M d', strtotime($row['tanggal']))) ?></span>
                                <span class="title"><?= $row['nama'] ?></span>
                                <a href="<?= $row['link'] ?>" class="btn-register" target="_blank"><?= $row['tombol'] ?></a>
                            </div>
                    <?php
                            $no++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row mb-5">
                <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-delay="200">
                    <h2 class="display-6 fw-bold mb-4">Kata Sambutan <br> <span>Dekan FMIPA</span></h2>
                    <p class="lead mb-4"><strong>Assalamualaikum Wr. Wb.</strong></p>
                    <p class="lead mb-4">Puji dan syukur kita panjatkan kehadirat Allah SWT, karena senantiasa melimpahkan Rahmat dan Karunia-Nya kepada kita semua. Shalawat dan salam semoga senantiasa tercurah kepada junjungan kita Nabi Muhammad SAW beserta keluarga dan para sahabatnya.</p>
                    <p class="lead mb-4">Alhamdulillahirabbil'alamin. Website FMIPA Unimed ini hadir sebagai sarana layanan informasi dan komunikasi serta juga diharapkan dapat memberikan kemudahan bagi civitas akademika dan masyarakat umum. Semoga website ini dapat memberikan manfaat dan kemudahan akses informasi seputar FMIPA Unimed.</p>
                    <p class="lead mb-4">Akhir kata, semoga kita semua senantiasa diberikan kemudahan dan keberkahan dalam setiap langkah kita. Terima kasih.</p>
                    <!-- <div class="d-flex flex-wrap gap-4 mb-4">
                        <div class="stat-box">
                            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>+</span>
                            <span class="stat-label">Years</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="1" class="purecounter"></span>+</span>
                            <span class="stat-label">Students</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>+</span>
                            <span class="stat-label">Faculty</span>
                        </div>
                    </div> -->
                    <div class="d-flex align-items-center mt-4 signature-block">
                        <!-- <img src="assets/img/misc/signature-1.webp" alt="Principal's Signature" width="120"> -->
                        <div class="ms-3">
                            <p class="mb-0 fw-bold">Dr. Ani Sutiani, M.Si</p>
                            <p class="mb-0 text-muted">Dekan FMIPA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="image-stack">
                        <div class="image-stack-item image-stack-item-bottom" data-aos="zoom-in" data-aos-delay="400">
                            <img src="assets/website/img/person/pimpinan/Dekan.webp" alt="Campus Life" class="img-fluid rounded-4 shadow-lg">
                        </div>
                        <!-- <div class="image-stack-item image-stack-item-top" data-aos="zoom-in" data-aos-delay="500">
                            <img src="assets/img/person/Dekan-1.webp" alt="Students" class="img-fluid rounded-4 shadow-lg">
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="row mission-vision-row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card h-100">
                        <div>
                            <img src="assets/website/img/person/pimpinan/WD1.webp" alt="" width="100%" class="mb-3">
                        </div>
                        <h3>Dr. Lasker P. Sinaga, M.Si</h3>
                        <p><strong>Wakil Dekan Bidang Akademik</strong></p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card h-100">
                        <div>
                            <img src="assets/website/img/person/pimpinan/WD2.webp" alt="" width="100%" class="mb-3">
                        </div>
                        <h3>Dr. Dewi Wulandari, M.Si</h3>
                        <p><strong>Wakil Dekan Bidang Umum dan Keuangan</strong></p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card h-100">
                        <div>
                            <img src="assets/website/img/person/pimpinan/WD3.webp" alt="" width="100%" class="mb-3">
                        </div>
                        <h3>Dr. Pardomuan Sitompul, M.Si</h3>
                        <p><strong>Wakil Dekan Bidang Kemahasiswaan</strong></p>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
</main>