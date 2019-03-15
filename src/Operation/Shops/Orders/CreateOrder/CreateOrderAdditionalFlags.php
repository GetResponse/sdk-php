<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\CreateOrder;

use Getresponse\Sdk\Client\Operation\ValueList;

class CreateOrderAdditionalFlags extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'skipAutomation',
        ];
    }
}
