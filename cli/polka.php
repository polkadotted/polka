#!/usr/bin/env php
<?php

/**
 * Load correct autoloader depending on install location.
 */
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
} else {
    require __DIR__.'/../../../autoload.php';
}

use Silly\Application;
use Illuminate\Container\Container;

/**
 * Create the application.
 */
Container::setInstance(new Container);

$version = '0.0.0';

$app = new Application('Polkadotted Polka', $version);

/**
 * Run the application.
 */
$app->run();