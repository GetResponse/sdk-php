<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\Templates\GetTemplate;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTemplateFields extends ValueList
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
