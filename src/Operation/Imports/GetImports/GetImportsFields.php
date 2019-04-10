<?php
namespace Getresponse\Sdk\Operation\Imports\GetImports;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetImportsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'importId',
            'campaign',
            'status',
            'statistics',
            'errorStatistics',
            'createdOn',
            'finishedOn',
            'href',
        ];
    }
}
