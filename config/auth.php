<?php
/**
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

return [
    'guards' => [
        'token' => [
            'class' => \MakiseCo\Auth\Guard\BearerTokenGuard::class,
            'provider' => 'database',
            'storageKey' => 'token',
        ],

        'form' => [
            'class' => \MakiseCo\Auth\Guard\BearerTokenGuard::class,
            'provider' => 'database',
            'loginKey' => 'email',
            'passwordKey' => 'password',
        ],
    ],

    'providers' => [
        'database' => [
            'class' => \App\Auth\DatabaseUserProvider::class,
        ],
    ],
];
