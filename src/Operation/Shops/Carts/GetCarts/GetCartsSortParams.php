<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\GetCarts;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetCartsSortParams extends SortParams
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
