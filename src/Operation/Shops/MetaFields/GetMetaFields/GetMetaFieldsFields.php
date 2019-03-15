<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaFields;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetMetaFieldsFields extends ValueList
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
