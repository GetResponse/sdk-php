<?php
namespace Getresponse\Sdk\Operation\GdprFields\GetGdprFields;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetGdprFieldsSortParams extends SortParams
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
