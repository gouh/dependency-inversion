<?php

declare(strict_types=1);
namespace App\Factory;

use App\DAO\UserDaoPdo;
use App\Handler\UserHandler;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class UserHandlerFactory
 * @package App\Factory
 * @author hangouh <hugohv10@gmail.com>
 */
class UserHandlerFactory
{
    /**
     * @param ContainerInterface $container
     * @return UserHandler
     */
    public function __invoke(ContainerInterface $container): RequestHandlerInterface
    {
        $userDao = $container->get(UserDaoPdo::class);
        return new UserHandler($userDao);
    }
}