<?php
defined('FMIPA_APP') or exit('Forbidden...!');

addRoute('/', 'index.php');
addRoute('/index', 'index.php');

addRoute('/admin', 'login.php');
addRoute('/level', 'level.php');
addRoute('/level2', 'level2.php');
addRoute('/level3', 'level3.php');
addRoute('/login/confirm', 'login_confirm.php');
addRoute('/logout', 'logout.php');

addRoute('/main', 'main.php', true);

// Event routes
addRoute('/event/create', '/webapp/event/add.php', true);
addRoute('/event/update', '/webapp/event/update.php', true);
addRoute('/event/delete', '/webapp/event/delete.php', true);

// Fungsionaris routes
addRoute('/fungsionaris/create', '/webapp/fungsionaris/add.php', true);
addRoute('/fungsionaris/update', '/webapp/fungsionaris/update.php', true);
addRoute('/fungsionaris/delete', '/webapp/fungsionaris/delete.php', true);

// Dosen routes
addRoute('/dosen/create', '/webapp/dosen/add.php', true);
addRoute('/dosen/update', '/webapp/dosen/update.php', true);
addRoute('/dosen/delete', '/webapp/dosen/delete.php', true);

// Prodi routes
addRoute('/prodi/create', '/webapp/prodi/add.php', true);
addRoute('/prodi/update', '/webapp/prodi/update.php', true);
addRoute('/prodi/delete', '/webapp/prodi/delete.php', true);

// Tendik routes
addRoute('/tendik/create', '/webapp/tendik/add.php', true);
addRoute('/tendik/update', '/webapp/tendik/update.php', true);
addRoute('/tendik/delete', '/webapp/tendik/delete.php', true);
