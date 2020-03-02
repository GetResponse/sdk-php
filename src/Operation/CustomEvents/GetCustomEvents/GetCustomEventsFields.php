<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvents;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCustomEventsFields extends ValueList
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
