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
        'sso' => [
            'class' => \MakiseCo\Auth\Guard\BearerTokenGuard::class,
            'provider' => 'sso',
        ]
    ],

    'providers' => [
        'sso' => [
            'class' => \App\Auth\EmptyUserProvider::class,
        ],
    ],
];
