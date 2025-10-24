<?php
defined('FMIPA_APP') or exit('Forbidden...!');

foreach ($config['HELPER'] as $function) {
    require_once $config['HELPER_DIR'] . '/' . $function;
}
