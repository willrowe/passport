<?php

namespace Laravel\Passport\Exceptions;

use Illuminate\Auth\AuthenticationException as Exception;
use Illuminate\Support\Facades\Config;

class AuthenticationException extends Exception
{
    public function __construct($message = 'Unauthenticated.', array $guards = null, $redirectTo = null)
    {
        if (is_null($guards)) {
            $guards = [Config::get('passport.guard')];
        }

        parent::__construct($message, $guards, $redirectTo);
    }
}
