<?php

require __DIR__ . '/vendor/autoload.php';

use Shirtnetwork\Backend\Server\Server;

if (!file_exists(__DIR__ . '/config.inc.php')){
    copy(__DIR__ . '/config.inc.sample.php', __DIR__ . '/config.inc.php');
}

$config = include __DIR__ . '/config.inc.php';

if ($config['debug'] === true){
    @ini_set("display_errors",1);
}

$server = new Server($config);
$server->serve();