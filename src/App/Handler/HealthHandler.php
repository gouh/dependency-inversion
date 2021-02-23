<?php


namespace App\Handler;


use App\DAO\UserDaoInterface;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HealthHandler implements RequestHandlerInterface
{
    /**
     * @var UserDaoInterface
     */
    private UserDaoInterface $userDao;

    /**
     * HealthHandler constructor.
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
        # mysql is connection true 'cause is only way to get here
        return new JsonResponse([
            'php_version' => phpversion (),
            'mysql_connection' => true,
            'time' => time()
        ]);
    }
}