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
    'auth' => [
        # see https://github.com/tuupola/slim-basic-auth#usage
        # path option will be configured by app and will be overridden
        'users' => [
            # "user" => "passw0rd"
        ]
    ]
];