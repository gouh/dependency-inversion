<?php


namespace App\Factory;


use App\DAO\UserDaoPdo;
use App\Handler\HealthHandler;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HealthHandlerFactory
{
    /**
     * @param ContainerInterface $container
     * @return HealthHandler
     */
    public function __invoke(ContainerInterface $container): RequestHandlerInterface
    {
        $userDao = $container->get(UserDaoPdo::class);
        return new HealthHandler($userDao);
    }
}