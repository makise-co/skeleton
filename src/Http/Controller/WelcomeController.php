<?php
/**
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Http\Controller;

use MakiseCo\Http\JsonResponse;

class WelcomeController
{
    public function welcome(): JsonResponse
    {
        return new JsonResponse([
            'message' => 'Hello from Makise-Co Framework',
            'data' => [
                'info' => 'Makise-Co Framework',
            ]
        ]);
    }
}