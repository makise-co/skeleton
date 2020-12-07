<?php
/**
 * File: SomeTest.php
 * Author: Dmitry K. <dmitry.k@brainex.co>
 * Date: 2020-04-20
 * Copyright (c) 2020
 */

declare(strict_types=1);

namespace Tests\Feature;

use Tests\WebTestCase;

class SomeTest extends WebTestCase
{
    public function testOk(): void
    {
        $this
            ->get('/')
            ->assertStatus(200);
    }
}
