<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategory;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCategoryFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'categoryId',
            'href',
            'name',
            'parentId',
            'isDefault',
            'url',
            'externalId',
            'createdOn',
            'updatedOn',
        ];
    }
}
