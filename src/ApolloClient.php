<?php

namespace tasakus;

use Illuminate\Config\Repository;


class ApolloClient
{
    protected $config;

    public function __construct()
    {


    }
    
    public function Print_ln()
    {
        $url = config('server', "123123123");
        return [
            'data' => "test"
        ];
    }
}