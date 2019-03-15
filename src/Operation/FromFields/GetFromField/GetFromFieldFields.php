<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromField;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetFromFieldFields extends ValueList
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
