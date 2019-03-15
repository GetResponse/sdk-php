<?php
namespace Getresponse\Sdk\Operation\Accounts\Timezones\GetTimezones;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTimezonesFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'timezoneId',
            'name',
            'offset',
            'country',
        ];
    }
}
