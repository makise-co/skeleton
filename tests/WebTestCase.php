<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace Tests;

use MakiseCo\Http\Testing\MakesHttpRequests;
use MakiseCo\ORM\Testing\DatabaseTransactions;

class WebTestCase extends TestCase
{
    use DatabaseTransactions;
    use MakesHttpRequests;

    protected array $connectionsToTransact = ['default'];
}
