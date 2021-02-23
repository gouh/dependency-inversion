<?php

declare(strict_types=1);
chdir(dirname(__DIR__));
require'vendor/autoload.php';

(function() {
    // Build of DI container
    $container = null;
    $containerBuilder = new \DI\ContainerBuilder();
    $containerBuilder->addDefinitions('config/config.php');

    // Try to build a container
    try {
        $container = $containerBuilder->build();
    } catch (Exception $e) {
        error_log($e->getMessage());
    }

    // Call to dispatcher
    (require 'config/routes.php')($container);
})();