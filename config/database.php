<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
    'default' => env('DB_CONNECTION', 'mysql'),
    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'connections' => [
      'mysql' => [
        'driver'      => 'mysql',
        'host'        => env('DB_HOST', '127.0.0.1'),
        'port'        => env('DB_PORT', '3306'),
        'database'    => env('DB_DATABASE', 'forge'),
        'username'    => env('DB_USERNAME', 'forge'),
        'password'    => env('DB_PASSWORD', ''),
        'unix_socket' => env('DB_SOCKET', ''),
        'charset'     => 'utf8mb4',
        'collation'   => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict'      => false,
        'engine' => null,
        'timezone'  => 'GMT',
      ],
    
  ],
    'redis' => [
      'client' => 'phpredis',
      'default' => [
          'host' => env('REDIS_HOST', 'localhost'),
          'password' => env('REDIS_PASSWORD', null),
          'port' => env('REDIS_PORT', 6379),
          'database' => 0,
          'read_timeout' => 60,
          'timeout' => 5,
          'persistent' => false
      ],
      'cache' => [
        'host' => env('REDIS_HOST', 'localhost'),
        'password' => env('REDIS_PASSWORD', null),
        'port' => env('REDIS_PORT', 6379),
        'database' => 1,
        'read_timeout' => 60,
        'timeout' => 5,
        'persistent' => false
      ],
      'queue' => [
        'host' => env('REDIS_HOST', 'localhost'),
        'password' => env('REDIS_PASSWORD', null),
        'port' => env('REDIS_PORT', 6379),
        'database' => 2,
        'read_timeout' => 60,
        'timeout' => 5,
        'persistent' => false
      ],
  ],

];
