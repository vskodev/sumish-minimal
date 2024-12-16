<?php

/**
 * Sumish Framework (https://sumish.xyz)
 *
 * @license https://sumish.mit-license.org (MIT License)
 */

declare(strict_types=1);

$composerAutoloader = __DIR__ . '/vendor/autoload.php';
if (file_exists($composerAutoloader)) {
    require $composerAutoloader;
} else {
    echo 'composer install';
}

(new Sumish\Application([]))->run();
