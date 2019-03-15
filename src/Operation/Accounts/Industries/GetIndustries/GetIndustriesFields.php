<?php
namespace Getresponse\Sdk\Operation\Accounts\Industries\GetIndustries;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetIndustriesFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'industryTagId',
            'name',
            'description',
        ];
    }
}
