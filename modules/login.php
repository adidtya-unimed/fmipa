<?php defined('FMIPA_APP') or exit('Forbidden...!'); ?>

<html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - e-Akreditasi FMIPA UNIMED</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/webapp/img/logo-fmipa.png" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Main style file -->
    <link rel="stylesheet" href="assets/webapp/css/app.css" type="text/css" />
</head>

<body class="auth">

    <!-- begin::preloader-->
    <!-- <div class="preloader">
        <div class="preloader-icon"></div>
    </div> -->
    <!-- end::preloader -->


    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="d-block d-lg-none text-center text-lg-start">
                                    <img width="100" src="assets/img/logo-fmipa.png" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Sign In</h1>
                                    <!-- <p class="text-muted">Sign in to CakeAdmin to continue</p> -->
                                </div>
                                <form class="mb-5" method="post" action="<?= getRoute('/login/confirm') ?>">
                                    <?php if (isset($_COOKIE['pesan'])) : ?>
                                        <div class="alert alert-warning"><i class="bi bi-exclamation-triangle"></i>
                                            <?= $_COOKIE['pesan']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <button type="submit" name="login" class="btn btn-primary">Sign In</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <img width="190" src="assets/webapp/img/logo-fmipa.png" alt="logo">
                        </div>
                        <div>
                            <p class="lead my-3">Selamat Datang </p>
                            <h1 class="fw-bold">SIMMIPA</h1>
                            <p class="fw-bold">Sistem Informasi Manajemen <br> FMIPA Universitas Negeri Medan</p>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JQuery -->
    <!-- <script src="../libs/jquery-3.7.1.min.js"></script> -->
    <script src="assets/webapp/libs/jquery-3.7.1.min.js"></script>

    <!-- Main Javascript file -->
    <script src="assets/webapp/js/app.js"></script>
</body>

</html>