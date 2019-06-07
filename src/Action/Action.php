<?php

namespace ADR\Action;

use ADR\Responder\Responder;

interface Action {
    public function dispatch(array $data): Responder;
}