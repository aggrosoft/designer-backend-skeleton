<?php

if (version_compare(phpversion(), '7.1.0', '<')) {
    die('shirtnetwork designer backend server needs at least PHP 7.1 to run');
}

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

// Include sample file and merge, allows for new options to be added with defaults
$sample = include __DIR__ . '/cfg.inc.sample.php';
$config = $sample ? array_replace_recursive($sample, $config) : $config;

if ($config['debug'] === true){
    @ini_set("display_errors",1);
}

$server = new Server($config);
$server->serve();