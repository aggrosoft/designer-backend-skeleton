<?php

require __DIR__ . '/vendor/autoload.php';

use Shirtnetwork\Backend\Server\Server;

if (!file_exists(__DIR__ . '/config.inc.php')){
    copy(__DIR__ . '/config.inc.sample.php', __DIR__ . '/config.inc.php');
}

$config = include __DIR__ . '/config.inc.php';

if (!is_dir($config['db']['path'])){
    mkdir($config['db']['path']);
}

if (!is_dir($config['fonts']['path'])){
    mkdir($config['fonts']['path']);
}

if (!is_dir($config['config']['path'])){
    mkdir($config['config']['path']);
}

$server = new Server($config);
$server->serve();