<?php

namespace App\ApiConsumers\PhoneSystem\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

class PhoneSystemEndpoint extends Endpoint
{
    protected $path = '/phonereport';

    public function all() {
        return $this->get();
    }

    public function paginate($value) {
        $this->path = "/phonereport/{$value}";
        return $this->get();
    }
}
