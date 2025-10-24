<?php
defined('FMIPA_APP') or exit('Forbidden...!');

if (!function_exists('getConfig')) {
    function getConfig($item)
    {
        global $config;
        return $config[$item];
    }
}

if (!function_exists('getSession')) {
    function getSession($item)
    {
        global $config;
        return $_SESSION[$config['SESSION_NAME']][$item];
    }
}

if (!function_exists('setPesan')) {
    function setPesan($name, $item)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION[$name] = $item;
    }
}

if (!function_exists('getPesan')) {
    function getPesan($name, $item, $opentag = "", $closetag = "")
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION[$name])) {
            $res = $_SESSION[$name];
        } else {
            $res = "";
        }

        unset($_SESSION[$name]);

        if ($opentag != "" && $closetag != "") {
            return $opentag . $res . $closetag;
        } else {
            return $res;
        }
    }
}
