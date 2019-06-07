<?php

namespace ADR\Responder;

use ADR\Domain\User\UserEntity;

class UserCreated implements Responder
{
    private UserEntity $user;

    public function __construct(UserEntity $user)
    {
        $this->user = $user;
    }

    public function send() {
        return json_encode($this->user->toArray());
    }

    public function error(Exception $exception) {
        return json_encode($exception);
    }
}