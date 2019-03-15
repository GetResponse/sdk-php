<?php
namespace Getresponse\Sdk\Operation\CustomFields\GetCustomFields;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCustomFieldsFields extends ValueList
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
