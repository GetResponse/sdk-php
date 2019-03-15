<?php
namespace Getresponse\Sdk\Operation\Suppressions\GetSuppressions;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetSuppressionsSortParams extends SortParams
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
