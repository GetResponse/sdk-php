<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddress;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetAddressFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'addressId',
            'href',
            'countryCode',
            'countryName',
            'name',
            'firstName',
            'lastName',
            'address1',
            'address2',
            'city',
            'zip',
            'province',
            'provinceCode',
            'phone',
            'company',
            'createdOn',
            'updatedOn',
        ];
    }
}
