<?php

namespace ADR\Responder;

interface Responder {
    public function send();
    public function error(Exception $exception);
}