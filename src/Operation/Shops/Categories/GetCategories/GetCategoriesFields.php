<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategories;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCategoriesFields extends ValueList
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
