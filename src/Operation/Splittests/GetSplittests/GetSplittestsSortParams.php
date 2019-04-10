<?php
namespace Getresponse\Sdk\Operation\Splittests\GetSplittests;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetSplittestsSortParams extends SortParams
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
