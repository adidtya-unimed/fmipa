<?php
define('FMIPA_APP', 'FMIPA APP');
date_default_timezone_set('Asia/Jakarta');

require './config/config.php';
require './system/common_function.php';
require './system/autoload.php';
require './system/routes_engine.php';
require './route/web.php';
require './system/activate_routes.php';
