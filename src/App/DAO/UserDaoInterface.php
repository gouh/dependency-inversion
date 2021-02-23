<?php

declare(strict_types=1);
namespace App\DAO;

/**
 * Interface UserDaoInterface
 * @package App\DAO
 * @author hangouh <hugohv10@gmail.com>
 */
interface UserDaoInterface
{
    /**
     * Get one user by id
     * @param int $userId
     * @return array
     */
    public function getByUserId(int $userId): array;

    /**
     * Get array of users
     * @return array
     */
    public function getAllUsers(): array;
}