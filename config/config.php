<?php
declare(strict_types=1);

use App\Handler;

return [
    Handler\HomeHandler::class => DI\factory(Handler\HomeHandlerFactory::class)
];