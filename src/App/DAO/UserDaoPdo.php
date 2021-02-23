<?php

declare(strict_types=1);
namespace App\DAO;

use PDO;

/**
 * Class UserDaoPdo
 * @package App\DAO
 * @author hangouh <hugohv10@gmail.com>
 */
class UserDaoPdo implements UserDaoInterface
{

    /**
     * @var PDO
     */
    private PDO $connection;

    /**
     * UserDaoPdo constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getByUserId(int $userId): array
    {
        return ['user_id' => 1];
    }

    public function getAllUsers(): array
    {
        return [
            ['user_id' => 1],
            ['user_id' => 2],
            ['user_id' => 3],
            ['user_id' => 4],
            ['user_id' => 5],
        ];
    }
}