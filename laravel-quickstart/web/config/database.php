<?php

return [

    'fetch' => PDO::FETCH_CLASS,

    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'mysql'),
            'database'  => env('DB_DATABASE', 'my_database'),
            'username'  => env('DB_USERNAME', 'my_user'),
            'password'  => env('DB_PASSWORD', 'my_password'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            'engine'    => null,
        ],

        'mysqltest' => [
            'driver'    => 'mysql',
            'host'      => env('DBTEST_HOST', 'mysqltest'),
            'database'  => env('DBTEST_DATABASE', 'my_database'),
            'username'  => env('DBTEST_USERNAME', 'my_user'),
            'password'  => env('DBTEST_PASSWORD', 'my_password'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            'engine'    => null,
        ],
    ],

    'migrations' => 'migrations',

    'redis' => [

        'cluster' => false,

        'default' => [
            'host'     => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port'     => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
