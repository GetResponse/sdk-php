<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\UpdateOrder;

use Getresponse\Sdk\Client\Operation\ValueList;

class UpdateOrderAdditionalFlags extends ValueList
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
