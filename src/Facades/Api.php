<?php

namespace Bitocredit\LaravelGateway\Facades;

use Illuminate\Support\Facades\Facade;

class Api extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Api';
    }
}