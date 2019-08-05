<?php

namespace App\ApiConsumers\PhoneSystem;

use BlackBits\ApiConsumer\ApiConsumer;

class PhoneSystem extends ApiConsumer
{
    protected function getEndpoint()
    {
        return config('api-consumers.PhoneSystem.apiBasePath');
    }
}
