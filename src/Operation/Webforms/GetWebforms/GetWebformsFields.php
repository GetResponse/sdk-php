<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebforms;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetWebformsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'webformId',
            'name',
            'href',
            'scriptUrl',
            'status',
            'modifiedOn',
            'statistics',
            'campaign',
        ];
    }
}
