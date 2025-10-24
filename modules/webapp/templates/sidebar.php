<?php
defined('FMIPA_APP') or exit('Forbidden...!');


require 'data-menu.php';
global $config;
?>

<!-- Sidebar menu -->
<div class="menu">
    <div class="menu-header">
        <a href="#" class="menu-header-logo">
            <img src="assets/webapp/img/logo-fmipa.png" alt="logo" width="30px" />
            <span>SIMMIPA App</span>
        </a>
        <a href="#" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center">
                <div class="avatar me-3">
                    <img src="assets/webapp/images/user/user.png" class="rounded-circle" alt="image" />
                </div>
                <div>
                    <div class="fw-bold"><?= getSession('nama') ?></div>
                    <small class="text-muted"><?= getSession('role') ?></small>
                </div>
            </a>
        </div>
        <ul>
            <li class="menu-divider">Menu</li>
            <?php $menu = $menus[$_SESSION[$config['SESSION_NAME']]['role']];
            foreach ($menu as $item) { ?>
                <li>
                    <a class="<?= $item['aktif'] ?>" href="<?= $item['href'] ?>">
                        <span class="nav-link-icon">
                            <i class="<?= $item['icon'] ?>"></i>
                        </span>
                        <span><?= $item['nama'] ?></span>
                    </a>
                    <?php if ($item['sub'] != null) { ?>
                        <ul>
                            <?php foreach ($item['sub'] as $sub) { ?>
                                <li>
                                    <a href="<?= $sub['href'] ?>"><?= $sub['nama'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            <?php } ?>
            <li class="menu-divider">Logout</li>
            <li>
                <a href="<?= getRoute('/logout') ?>">
                    <span class="nav-link-icon">
                        <i class="bi bi-box-arrow-right"></i>
                    </span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ./Sidebar menu -->

<script>
    // Sidebar menu
    const currentLocation = window.location.href;
    const menuItem = document.querySelectorAll('.menu-body ul li a');
    menuItem.forEach(item => {
        item.classList.remove('active');
        if (item.href === currentLocation) {
            item.classList.add('active');
        }
    });
</script>