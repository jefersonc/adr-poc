<?php

namespace ADR\Action;

use ADR\Domain\User\UserService;
use ADR\Responder\Responder;
use ADR\Responder\UserCreated;

class CreateUser implements Action
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;

    }

    public function dispatch($data): Responder
    {
        $user = $this->service->create($data);

        return new UserCreated($user);
    }
}