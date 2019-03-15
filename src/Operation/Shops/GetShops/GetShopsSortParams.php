<?php
namespace Getresponse\Sdk\Operation\Shops\GetShops;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetShopsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'createdOn',
        ];
    }
}
