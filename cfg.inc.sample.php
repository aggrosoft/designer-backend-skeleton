<?php

return [
    'debug' => false,
    'allowed-origins' => '*',
    'db' => [
        'path' => __DIR__ . '/var/db/'
    ],
    'config' => [
        'path' => __DIR__ . '/var/configs/',
        'tmp' => __DIR__ . '/var/tmp/',
        'cache_previews' => false
    ],
    'fonts' => [
        'path' => __DIR__ . '/var/fonts/'
    ],
    'twig' => [
        'cache' => __DIR__ . '/var/twig/'
    ],
    'upload' => [
        'path' => __DIR__ . '/var/uploads/',
        'cache' => __DIR__ . '/var/uploadsmeta/',
        'tmp' => __DIR__ . '/var/tmp/'
    ],
    'auth' => [
        # see https://github.com/tuupola/slim-basic-auth#usage
        # path option will be configured by app and will be overridden
        'users' => [
            # "user" => "passw0rd"
        ]
    ]
    /*
    // Uncomment to use javascript based preview renderer, node must be installed for this!
    // Also you will have to run npm install
    'renderer' => [
        'class' => \Shirtnetwork\Backend\Config\Fabric\Renderer::class,
        'config' => [
            'path' => '' //If node is not in your $PATH add path to binaries here
        ]
    ]
     */
];