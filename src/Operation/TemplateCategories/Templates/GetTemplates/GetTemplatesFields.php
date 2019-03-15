<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\Templates\GetTemplates;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTemplatesFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'templateId',
            'href',
            'isFavourite',
            'category',
            'colorVariants',
        ];
    }
}
