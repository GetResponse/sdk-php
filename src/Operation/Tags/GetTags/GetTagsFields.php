<?php
namespace Getresponse\Sdk\Operation\Tags\GetTags;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTagsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'tagId',
            'href',
            'name',
            'color',
        ];
    }
}
