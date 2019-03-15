<?php
namespace Getresponse\Sdk\Operation\GdprFields\GetGdprFields;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetGdprFieldsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'gdprFieldId',
            'name',
            'createdOn',
            'href',
        ];
    }
}
