<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\GetOrder;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetOrderFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'orderId',
            'href',
            'contactId',
            'orderUrl',
            'externalId',
            'totalPrice',
            'totalPriceTax',
            'currency',
            'status',
            'cartId',
            'description',
            'shippingPrice',
            'shippingAddress',
            'billingStatus',
            'billingAddress',
            'processedAt',
            'selectedVariants',
            'metaFields',
            'createdOn',
            'updatedOn',
        ];
    }
}
