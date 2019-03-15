<?php
namespace Getresponse\Sdk\Operation\Shops\Products\GetProducts;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetProductsSortParams extends SortParams
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
