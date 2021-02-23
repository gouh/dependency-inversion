<?php

declare(strict_types=1);
namespace App\Handler;

use App\DAO\UserDao;
use Psr\Container\ContainerInterface;

/**
 * Class UserHandlerFactory
 * @package App\Handler
 * @author hangouh <hugohv10@gmail.com>
 */
class UserHandlerFactory
{
    /**
     * @param ContainerInterface $container
     * @return UserHandler
     */
    public function __invoke(ContainerInterface $container): UserHandler
    {
        $userDao = $container->get(UserDao::class);
        return new UserHandler($userDao);
    }
}