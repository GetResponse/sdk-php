<?php
namespace Getresponse\Sdk\Operation\Shops\GetShop;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetShopFields extends ValueList
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
