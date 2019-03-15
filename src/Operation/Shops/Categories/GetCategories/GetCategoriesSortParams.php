<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategories;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetCategoriesSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'createdAt',
        ];
    }
}
