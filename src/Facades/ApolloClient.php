<?php

namespace tasakus\ApolloExt\Facades;

use Illuminate\Support\Facades\Facade;

class ApolloClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ApolloClient';
    }
}