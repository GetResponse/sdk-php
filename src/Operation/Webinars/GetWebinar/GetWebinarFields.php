<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinar;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetWebinarFields extends ValueList
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
