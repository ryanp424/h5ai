<?php

define('MIN_PHP_VERSION', '5.4.0');

if (version_compare(PHP_VERSION, MIN_PHP_VERSION, '<')) {
    header('Content-type: text/plain;charset=utf-8');
    echo '[err]  {{pkg.name}} requires PHP ' . MIN_PHP_VERSION . ' or later, but found PHP ' . PHP_VERSION;
    exit;
}

require_once __DIR__ . '/../backend/php/class-bootstrap.php';
Bootstrap::run();
