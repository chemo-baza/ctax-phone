<?php

namespace App\CollectionCallbacks;

use BlackBits\ApiConsumer\Support\BaseCollectionCallback;
use Illuminate\Support\Collection;

class ReceivesPhoneSystemCollectionCallback extends BaseCollectionCallback
{
    private $value;

    /**
     * ReceivesPhoneSystemCollectionCallback constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param Collection &$collection
     * @return Collection
     */
    function applyTo(Collection &$collection) : Collection
    {
//        return $collection->chunk($this->value);
    }
}
