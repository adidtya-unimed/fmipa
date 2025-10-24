<?php
defined('FMIPA_APP') or exit('Forbidden...!');

$request_uri = $_SERVER['PHP_SELF'];

if (strncmp($request_uri, $config['APP_ROOT'], strlen($config['APP_ROOT'])) === -1) {
    die('Perbaiki konfigurasi APP_ROOT "' . $config['APP_ROOT'] . '"');
}

$request_uri = substr($request_uri, strlen($config['APP_ROOT']));

if (strncmp(strtolower($request_uri), '/index.php/', strlen('/index.php/')) === 0) {
    $request_uri = substr($request_uri, strlen('/index.php'));
} else if (strtolower($request_uri) == '/index.php') {
    $request_uri = '/';
}

$ROUTES = [];

function addRoute($path, $module, $need_session = false)
{
    global $ROUTES;
    if (substr($path, 0, 1) != "/") {
        $ROUTES[strtolower('/' . $path)] = ["module" => $module, "need_session" => $need_session];
    } else {
        $ROUTES[strtolower($path)] = ["module" => $module, "need_session" => $need_session];
    }
}

function redirect($path)
{
    global $config;
    if (substr($path, 0, 1) != '/') {
        header('Location: ' . $config['APP_ROOT'] . '/' . $path);
    } else {
        header('Location: ' . $config['APP_ROOT'] . $path);
    }
    exit();
}

function getRoute($path)
{
    global $config;
    if (substr($path, 0, 1) != "/") {
        return $config['APP_ROOT'] . '/' . $path;
    } else {
        return $config['APP_ROOT'] . $path;
    }
}

function isRequestURI($href)
{
    global $request_uri;
    if ($href == $request_uri) {
        return true;
    }
    return false;
}
