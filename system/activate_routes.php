<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!isset($ROUTES[$request_uri])) {
    include './error/404.php';
} else {
    $need_session = $ROUTES[$request_uri]["need_session"];
    $module = $ROUTES[$request_uri]["module"];

    if (substr($module, 0, 1) != '/') {
        $module = '/' . $module;
    }

    if ($need_session) {
        session_start();
        if (!isset($_SESSION[$config['SESSION_NAME']])) {
            redirect($config['REDIRECT_PATH']);
        }
    }

    ob_start();
    include $config['MODULES_DIR'] . $module;
    $content = ob_get_contents();
    ob_end_clean();
    echo $content;
}
