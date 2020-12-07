<?php
/**
 * File: TestCase.php
 * Author: Dmitry K. <dmitry.k@brainex.co>
 * Date: 2020-04-20
 * Copyright (c) 2020
 */

declare(strict_types=1);

namespace Tests;

use MakiseCo\ApplicationInterface;

class TestCase extends \MakiseCo\Testing\TestCase
{
    protected function createApplication(): ApplicationInterface
    {
        $appDir = dirname(__DIR__);
        $configDir = $appDir . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR;

        return new \MakiseCo\Application($appDir, $configDir);
    }
}
