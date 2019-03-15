<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddresses;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetAddressesFields extends ValueList
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
