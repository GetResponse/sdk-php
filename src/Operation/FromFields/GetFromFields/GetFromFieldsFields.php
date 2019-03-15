<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromFields;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetFromFieldsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'fromFieldId',
            'href',
            'email',
            'name',
            'isActive',
            'isDefault',
            'createdOn',
        ];
    }
}
