<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\GetTax;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTaxFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'taxId',
            'href',
            'name',
            'rate',
            'createdOn',
            'updatedOn',
        ];
    }
}
