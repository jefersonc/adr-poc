<?php

namespace ADR\Domain\User;

use ADR\Domain\Infra\Database\DatabaseAdapter;
use ADR\Domain\Infra\Repository;

class UserRepository implements Repository
{
    private DatabaseAdapter $database;

    public function __construct(DatabaseAdapter $databaseAdapter)
    {
        $this->database = $databaseAdapter;
    }

    public function save(UserEntity $user): boolean
    {
        return $this->database->query(
            sprintf(
                "INSER INTO users (name, email) VALUES ('%s', '%s')",
                $user->name(),
                $user->email()
            )
        );
    }
}