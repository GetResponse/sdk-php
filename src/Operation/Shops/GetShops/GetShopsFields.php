<?php
namespace Getresponse\Sdk\Operation\Shops\GetShops;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetShopsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'shopId',
            'href',
            'name',
            'locale',
            'currency',
            'createdOn',
            'updatedOn',
        ];
    }
}
