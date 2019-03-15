<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\GetOrders;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetOrdersSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
        ];
    }
}
