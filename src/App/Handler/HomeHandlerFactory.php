<?php

declare(strict_types=1);
namespace App\Handler;

use App\DAO\UserDao;
use Psr\Container\ContainerInterface;

/**
 * Class HomeHandlerFactory
 * @package App\Handler
 * @author hangouh <hugohv10@gmail.com>
 */
class HomeHandlerFactory
{
    /**
     * @param ContainerInterface $container
     * @return HomeHandler
     */
    public function __invoke(ContainerInterface $container): HomeHandler
    {
        $userDao = $container->get(UserDao::class);
        return new HomeHandler($userDao);
    }
}