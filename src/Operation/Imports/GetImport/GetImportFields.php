<?php
namespace Getresponse\Sdk\Operation\Imports\GetImport;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetImportFields extends ValueList
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
