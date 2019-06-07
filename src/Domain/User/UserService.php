<?php

namespace ADR\Domain\User;

use ADR\Domain\Infra\Repository;

class UserService
{
    private Repository $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function create(array $user): boolean
    {
        $userEntity = UserEntity::build($user);

        if($this->repository->save($userEntity)) {
            return $userEntity;
        }

        return false;
    }
}