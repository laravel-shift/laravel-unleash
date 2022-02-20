<?php

namespace LaravelUnleash\Tests\Stubs;

use Illuminate\Http\Request;
use LaravelUnleash\Strategies\Contracts\Strategy;

class ImplementedStrategy implements Strategy
{
    public function isEnabled(array $params, Request $request): bool
    {
        return true;
    }
}
