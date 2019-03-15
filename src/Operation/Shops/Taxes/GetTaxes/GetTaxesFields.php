<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTaxesFields extends ValueList
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
