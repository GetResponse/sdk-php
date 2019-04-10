<?php
namespace Getresponse\Sdk\Operation\Imports\GetImports;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetImportsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
            'finishedOn',
        ];
    }
}
