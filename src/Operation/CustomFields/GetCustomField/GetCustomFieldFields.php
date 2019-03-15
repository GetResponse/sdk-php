<?php
namespace Getresponse\Sdk\Operation\CustomFields\GetCustomField;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCustomFieldFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'customFieldId',
            'href',
            'name',
            'type',
            'valueType',
            'format',
            'fieldType',
            'hidden',
            'values',
        ];
    }
}
