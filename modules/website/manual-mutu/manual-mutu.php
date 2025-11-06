<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<?php
$query = "SELECT * FROM mutu_internal WHERE `kategori`='Manual SPMI' ORDER BY id ASC";
$result = mysqli_query($conn, $query);
?>
<!-- Start #main -->
<main class="main">
    <?php pageTitle('Manual Mutu SPMI', 'Manual SPMI'); ?>

    <section id="events-2" class="events2 section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="section-header">
                <h2 class="section-title">Manual Mutu SPMI Unimed</h2>
                <p class="section-description d-flex justify-content-around">Manual Mutu di Universitas Negeri Medan mengacu pada peraturan Rektor Universitas Negeri Medan No. 0656/UN33/KPT/2020 mengenai Sistem Penjaminan Mutu Internal di Univeristas Negeri Medan. Dokumen Manual Mutu SPMI dapat dilihat pada link dibawah ini</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="event-card">
                        <div class="event-content">
                            <h3 class="event-title"><a href="#">Dokumen Manual Mutu SPMI Unimed</a></h3>
                        </div>
                        <div class="sidebar-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="categories">
                                <ul>
                                    <?php
                                    if (mysqli_num_rows($result) > 0) :
                                        while ($row = mysqli_fetch_assoc($result)) :
                                    ?>
                                            <li><a href="<?= $row['link_dokumen'] ?>"><?= $row['nama'] ?> <span>(<?= $row['keterangan'] ?>)</span></a></li>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>