<?php

namespace Bitocredit\LaravelGateway;

use Bitocredit\PhpGateway\ApiPhp;

class Api extends ApiPhp
{

    public function __construct()
    {
        parent::__construct(config("gateway.token"));
        $this->config['baseURL'] = config("gateway.base_url");
    }

}