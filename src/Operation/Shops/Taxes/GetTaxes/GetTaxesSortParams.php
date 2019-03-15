<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetTaxesSortParams extends SortParams
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
