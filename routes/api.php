<?php
/**
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

use MakiseCo\Http\Router\RouteCollector;

/* @var RouteCollector $routes */

$routes->addGroup('', [
    'namespace' => 'App\\Http\\Controller\\',
//    'middleware' => [
//        YourMiddleware::class,
//    ],
], static function (RouteCollector $routes) {
    $routes->get('/', 'WelcomeController@welcome');
});
