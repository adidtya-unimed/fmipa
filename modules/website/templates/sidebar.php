<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.webp" alt=""> -->
            <!-- <i class="bi bi-buildings"></i> -->
            <!-- <h1 class="sitename">Halo</h1> -->
            <img src="assets/website/img/logo-fmipa.png" alt="" height="100">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= getRoute('/') ?>" class="active">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= getRoute('/') ?>?p=visi-misi">Visi, Misi & Tujuan</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=fungsionaris">Fungsionaris</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=sejarah">Sejarah FMIPA Unimed</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=dosen">Dosen</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=tendik">Tenaga Kependidikan</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="https://math.unimed.ac.id/" target="_blank">Matematika</a></li>
                                <li><a href="https://fisika.unimed.ac.id/" target="_blank">Fisika</a></li>
                                <li><a href="https://kimia.unimed.ac.id/" target="_blank">Kimia</a></li>
                                <li><a href="https://biologi.unimed.ac.id/" target="_blank">Biologi</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= getRoute('/') ?>?p=prodi">Program Studi</a></li>
                        <li><a href="#">Jadwal Kuliah</a></li>
                        <li><a href="#">Kalender Akademik</a></li>
                        <li class="dropdown"><a href="#"><span>SK</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">SK Mengajar</a></li>
                                <li><a href="#">SK DPA</a></li>
                                <li><a href="#">SK DPS</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Panduan/Pedoman</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Buku Pedoman</a></li>
                                <li><a href="#">Buku Panduan</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Kurikulum OBE</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= getRoute('/') ?>?p=kemahasiswaan-fakultas">Tingkat Fakultas</a></li>
                        <li><a href="#">Tingkat Jurusan</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Mutu Internal</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= getRoute('/') ?>?p=kebijakan-mutu">Kebijakan Mutu</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=standar-mutu">Standard Mutu</a></li>
                        <li><a href="<?= getRoute('/') ?>?p=manual-mutu">Manual Mutu</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Zona Integritas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Manajemen Perubahan</a></li>
                        <li><a href="#">Penataan Tatalaksana</a></li>
                        <li><a href="#">Penataan Manajemen SDM</a></li>
                        <li><a href="#">Penguatan Akuntabilitas</a></li>
                        <li><a href="#">Penguatan Pengawasan</a></li>
                        <li><a href="#">Kualitas Pelayanan Publik</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Pengaduan Online</a></li>
                        <li><a href="https://lapor.go.id/" target="_blank">LAPOR</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Lain-lain</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="https://sitsefmipa.unimed.ac.id/" target="_blank">AISTSSE</a></li>
                                <li><a href="#">PKKMB</a></li>
                                <li><a href="#">Mathematics Fair</a></li>
                                <li><a href="#">Physics Festival</a></li>
                                <li><a href="#">Chemical Expo</a></li>
                                <li><a href="#">Biology Exhibition</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Beasiswa</a></li>
                                <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Aula FMIPA</a></li>
                                        <li><a href="#">Laboratorium</a></li>
                                        <li><a href="#">Sarana Prasarana</a></li>
                                        <li><a href="#">Rumah Kaca</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Survei</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Kepuasan Mitra Kerjasama</a></li>
                                        <li><a href="https://tracer.unimed.ac.id/alumni/login.php" target="_blank">Tracer Study</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>