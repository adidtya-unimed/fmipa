<?php
defined('FMIPA_APP') or exit('Forbidden...!');

session_start();
unset($_SESSION[$config['SESSION_NAME']]);
redirect('/admin');
