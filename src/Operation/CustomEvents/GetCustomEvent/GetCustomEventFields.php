<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvent;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCustomEventFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'customEventId',
            'createdOn',
            'href',
            'name',
            'attributes',
        ];
    }
}
