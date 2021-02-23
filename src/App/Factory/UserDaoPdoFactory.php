<?php


namespace App\Factory;


use PDO;
use Psr\Container\ContainerInterface;
use App\DAO\UserDaoPdo;

class UserDaoPdoFactory
{
    /**
     * @param ContainerInterface $container
     * @return UserDaoPdo
     */
    public function __invoke(ContainerInterface $container): UserDaoPdo
    {
        $dbConnection = $container->get(PDO::class);
        return new UserDaoPdo($dbConnection);
    }
}