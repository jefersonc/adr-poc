<?php

namespace ADR\Domain\User;

use ADR\Domain\Infra\Entity;

class UserEntity implements Entity
{
    private string $_name;
    private string $_email;

    public function __construct(string $name, string $email)
    {
        $this->_name = $name;
        $this->_email = $email;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name(),
            'email' => $this->email()
        ];
    }

    public static function build(array $data): UserEntity {
        return new UserEntity($data['name'], $data['email']);
    }

    public function name() {
        return $this->_name;
    }

    public function email() {
        return $this->_email;
    }
}