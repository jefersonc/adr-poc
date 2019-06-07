<?php

namespace ADR\Domain\Infra;

interface Entity {
    public function toArray(): array;
    public static function build(array $data);
}