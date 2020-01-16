<?php

return [
    'debug' => false,
    'allowed-origins' => '*',
    'db' => [
        'path' => __DIR__ . '/var/db/'
    ],
    'config' => [
        'path' => __DIR__ . '/var/configs/'
    ],
    'fonts' => [
        'path' => __DIR__ . '/var/fonts/'
    ],
    'twig' => [
        'cache' => __DIR__ . '/var/twig/'
    ],
    'upload' => [
        'path' => __DIR__ . '/var/uploads/',
        'cache' => __DIR__ . '/var/uploadsmeta/'
    ],
];