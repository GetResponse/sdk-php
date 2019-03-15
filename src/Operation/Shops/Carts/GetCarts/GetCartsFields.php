<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\GetCarts;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCartsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'cartId',
            'href',
            'contactId',
            'totalPrice',
            'totalTaxPrice',
            'currency',
            'selectedVariants',
            'externalId',
            'cartUrl',
            'createdOn',
            'updatedOn',
        ];
    }
}
