<?php
namespace Getresponse\Sdk\Operation\Shops\Products\GetProduct;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetProductFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'productId',
            'href',
            'name',
            'type',
            'url',
            'vendor',
            'externalId',
            'categories',
            'variants',
            'metaFields',
            'createdOn',
            'updatedOn',
        ];
    }
}
