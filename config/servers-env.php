<?php

$userConfig = include __DIR__ . '/servers.php';

$dockerConfig = [
    0 => [
        'ServerName' => getenv('RO_SERVER_NAME'),
        'DbConfig' => [
            'Hostname' => "mariadb",
            'Username' => "ragnarok",
            'Password' => "ragnarok",
            'Database' => "ragnarok",
        ],
        'LogsDbConfig' => [
            'Hostname' => "mariadb",
            'Username' => "ragnarok",
            'Password' => "ragnarok",
            'Database' => "ragnarok",
        ],
        'LoginServer' => [
            'Address' => "login-server",
        ],
        'CharMapServers' => [
            0 => [
                'ServerName' => getenv('RO_SERVER_NAME'),
                'CharServer' => [
                    'Address' => "char-server",
                ],
                'MapServer' => [
                    'Address' => "map-server",
                ],
            ]
        ]
    ]
];

return array_replace_recursive($userConfig, $dockerConfig);