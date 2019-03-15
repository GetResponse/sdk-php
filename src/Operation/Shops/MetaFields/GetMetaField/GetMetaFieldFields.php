<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaField;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetMetaFieldFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'href',
            'metaFieldId',
            'name',
            'value',
            'valueType',
            'description',
            'createdOn',
            'updatedOn',
        ];
    }
}
