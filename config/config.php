<?php
defined('FMIPA_APP') or exit('Forbidden...!');

$config['APP_ROOT'] = '/fmipa';
$config['APP_NAME'] = 'FMIPA';
$config['VERSI'] = '1.0';
$config['DB_SERVER'] = 'localhost';
$config['DB_USER'] = 'root';
$config['DB_PASSWORD'] = '';
$config['DB_NAME'] = 'fmipa';
$config['HELPER_DIR'] = './helper';
$config['MODULES_DIR'] = './modules';
$config['STORAGE_DIR'] = './storage';
$config['ROUTE_DIR'] = './route';
$config['SESSION_NAME'] = 'FMIPA_APP';
$config['REDIRECT_PATH'] = '/admin';
$config['HELPER'] = ['koneksi.php', 'request.php'];
