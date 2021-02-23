<?php


namespace App\Factory;

use Fig\Http\Message\StatusCodeInterface;
use PDO;
use PDOException;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\MessageInterface;

class PdoConnectionFactory
{
    /**
     * @param ContainerInterface $container
     * @return PDO
     */
    public function __invoke(ContainerInterface $container): PDO
    {
        $config = $container->get('dbConfig');
        $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}";
        try {
            return new PDO($dsn, $config['user'], $config['password'], $config['driverOptions']);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            http_response_code(StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR);
            die($e->getMessage());
        }
    }
}