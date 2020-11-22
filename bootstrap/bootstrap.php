<?php
/**
 * File: bootstrap.php
 * Author: Dmitry K. <dmitry.k@brainex.co>
 * Date: 2020-04-06
 * Copyright (c) 2020
 */

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$appDir = dirname(__DIR__);
$configDir = $appDir . '/config';

return new \MakiseCo\Application($appDir, $configDir);
