<?php

declare(strict_types=1);
namespace App\DAO;

/**
 * Class UserDao
 * @package App\DAO
 * @author hangouh <hugohv10@gmail.com>
 */
class UserDao implements UserDaoInterface
{

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