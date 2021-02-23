<?php

namespace App;

use DI;
use FastRoute\RouteCollector;

/**
 * Class ConfigProvider
 * @package App
 * @author hangouh <hugohv10@gmail.com>
 */
class ConfigProvider
{
    /**
     * Config of factories of project
     *
     * @return array
     */
    public function __invoke(): array
    {
        return [
            DAO\UserDaoPdo::class => DI\factory(Factory\UserDaoPdoFactory::class),
            Handler\UserHandler::class => DI\factory(Factory\UserHandlerFactory::class),
            Handler\HealthHandler::class => DI\factory(Factory\HealthHandlerFactory::class)
        ];
    }

    /**
     * @param RouteCollector $router
     * @param string $context
     */
    public function registerRoutes(RouteCollector $router, string $context): void
    {
        $router->addRoute('GET', $context, Handler\UserHandler::class);
        $router->addRoute('GET', $context . 'health', Handler\HealthHandler::class);
    }
}