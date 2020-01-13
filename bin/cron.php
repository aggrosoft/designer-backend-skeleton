<?php

require __DIR__ . '/vendor/autoload.php';

use Shirtnetwork\Backend\Server\Server;

$config = include __DIR__ . 'config.inc.php';
$server = new Server($config);
$server->serve();