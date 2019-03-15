<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebform;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetWebformFields extends ValueList
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
