<?php

namespace Yandy\grpc\Facades;

use Illuminate\Support\Facades\Facade;

class GrpcClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ClientFactory';
    }
}
