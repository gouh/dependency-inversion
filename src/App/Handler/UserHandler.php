<?php

declare(strict_types=1);
namespace App\Handler;

use Fig\Http\Message\StatusCodeInterface;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\DAO\UserDaoInterface;

/**
 * Class UserHandler
 * @package App\Handler
 * @author hangouh <hugohv10@gmail.com>
 */
class UserHandler implements RequestHandlerInterface
{

    /**
     * @var UserDaoInterface
     */
    private UserDaoInterface $userDao;

    /**
     * UserHandler constructor.
     * @param UserDaoInterface $userDao
     */
    public function __construct(UserDaoInterface $userDao)
    {
        $this->userDao = $userDao;
    }

    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse($this->userDao->getAllUsers(), StatusCodeInterface::STATUS_OK);
    }
}