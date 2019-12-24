<?php

namespace Yandy\grpc;


class ClientFactory
{
    private $services;

    public function __construct()
    {
        $this->services = config('grpc');
    }

    public function make($serviceName)
    {
        if(!array_key_exists($serviceName,$this->services))
            throw new \Exception('该服务不存在');

        return new $this->services[$serviceName]['class']($this->services[$serviceName]['host'],[
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);
    }
}