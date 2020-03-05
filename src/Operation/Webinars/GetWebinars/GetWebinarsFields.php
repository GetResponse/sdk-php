<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinars;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetWebinarsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'webinarId',
            'href',
            'createdOn',
            'startsOn',
            'webinarUrl',
            'status',
            'type',
            'campaigns',
            'newsletters',
            'statistics',
        ];
    }
}
