<?php

namespace tasakus\ApolloExt;

use Illuminate\Config\Repository;


class ApolloClient
{
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config->get('apollo_config');

    }
    
    public function Print_ln()
    {
        return [
            'data' => "test"
        ];
    }
}