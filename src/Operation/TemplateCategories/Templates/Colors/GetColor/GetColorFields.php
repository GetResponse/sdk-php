<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\Templates\Colors\GetColor;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetColorFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'templateColorId',
            'name',
            'colorHex',
            'thumbnail',
            'preview',
            'href',
            'template',
            'htmlContent',
        ];
    }
}
