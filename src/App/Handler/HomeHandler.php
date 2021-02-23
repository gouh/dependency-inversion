<?php

declare(strict_types=1);
namespace App\Handler;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\DAO\UserDaoInterface;

/**
 * Class HomeHandler
 * @package App\Handler
 * @author hangouh <hugohv10@gmail.com>
 */
class HomeHandler implements RequestHandlerInterface
{

    /**
     * @var UserDaoInterface
     */
    private UserDaoInterface $userDao;

    /**
     * HomeHandler constructor.
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
        return new JsonResponse($this->userDao->getAllUsers());
    }
}