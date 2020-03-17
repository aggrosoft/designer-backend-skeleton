<?php

require __DIR__ . '/vendor/autoload.php';

use Shirtnetwork\Backend\Server\Server;

$configFile = __DIR__ . '/config.inc.php';
$cfgFile = __DIR__ . '/cfg.inc.php';

if (!file_exists($configFile) && !file_exists($cfgFile)){
    copy(__DIR__ . '/cfg.inc.sample.php', $cfgFile);
}

if (file_exists($configFile)) {
    $config = include $configFile;
}elseif(file_exists($cfgFile)) {
    $config = include $cfgFile;
}

if ($config['debug'] === true){
    @ini_set("display_errors",1);
}

$server = new Server($config);
$server->serve();