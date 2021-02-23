<?php
declare(strict_types=1);

use FastRoute\RouteCollector;
use Laminas\Diactoros\ServerRequestFactory;
use Middlewares\Utils\Dispatcher;
use Psr\Container\ContainerInterface;

/**
 * Route dispatcher
 * @param ContainerInterface $container
 */
return function(ContainerInterface $container) {
    $dispatcherFr = FastRoute\simpleDispatcher(function(RouteCollector $router) {
        (new App\ConfigProvider())->registerRoutes($router, '/');
    });

    $dispatcher = new Dispatcher([
        new Middlewares\FastRoute($dispatcherFr),
        new Middlewares\RequestHandler($container)
    ]);

    $response = $dispatcher->dispatch(ServerRequestFactory::fromGlobals());

    header(
        'HTTP/'. $response->getProtocolVersion()
        . ' ' . $response->getStatusCode()
        . ' ' . $response->getReasonPhrase()
    );
    foreach ($response->getHeaders() as $header => $value) {
        header("{$header}: ". join(';', $value));
    }
    echo $response->getBody();

    exit();
};