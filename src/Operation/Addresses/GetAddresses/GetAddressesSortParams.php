<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddresses;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetAddressesSortParams extends SortParams
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
