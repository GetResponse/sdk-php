<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\GetTemplateCategories;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTemplateCategoriesFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'categoryId',
            'name',
            'templates',
            'type',
        ];
    }
}
