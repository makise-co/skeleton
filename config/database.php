<?php
/**
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

use function MakiseCo\Env\env;

return [
    'default' => 'default',

    'databases' => [
        'default' => ['connection' => 'pgsql'],
    ],

    'connections' => [
        'pgsql' => [
            'driver' => \MakiseCo\Database\Driver\MakisePostgres\PooledMakisePostgresDriver::class,
            'options' => [
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', 5432),
                'username' => env('DB_USERNAME', 'makise'),
                'password' => env('DB_PASSWORD'),
                'database' => env('DB_DATABASE', 'makise'),
                // or 'connection' => env('DB_URL', 'host=127.0.0.1;dbname=makise'),
                'schema' => ['public'],
                'timezone' => 'UTC',
                'charset' => 'utf8',
                'application_name' => 'MakiseCo Framework',

                'connector' => \MakiseCo\Postgres\Driver\Pq\PqConnector::class,
                'connect_timeout' => 5,

                // connection pool configuration
                'poolMinActive' => (int)env('DB_POOL_MIN_ACTIVE', 0),
                'poolMaxActive' => (int)env('DB_POOL_MAX_ACTIVE', 2),
                'poolMaxIdleTime' => (int)env('DB_POOL_MAX_IDLE_TIME', 30),
                'poolValidationInterval' => 15.0,
                'poolMaxWaitTime' => 5,
            ],
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'namespace' => 'App\\Migrations',
        'directory' => dirname(__DIR__) . '/src/Migrations',
        'safe' => env('APP_ENV', 'production') !== 'production',
    ],

    'orm' => [
        'entityPath' => [
            dirname(__DIR__) . '/src/Entity'
        ],
    ],
];
