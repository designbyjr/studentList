<?php

namespace App\Services\Client;
use Wonde\Client;


Abstract class Wonde extends Client
{
    /**
     * @throws \Wonde\Exceptions\InvalidTokenException
     */
    public function __construct($logPath = '')
    {
        $token = env('WONDE_CLIENT_TOKEN');
        parent::__construct($token, $logPath);
    }
}
