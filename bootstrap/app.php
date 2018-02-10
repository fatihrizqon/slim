<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\App([
    'settings'=>[
        'displayErrorDetails' => true,
        'db' =>
        [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => '',
            'username'  => '',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ]
    ]
]);
