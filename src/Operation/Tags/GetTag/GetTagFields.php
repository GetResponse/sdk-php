<?php
namespace Getresponse\Sdk\Operation\Tags\GetTag;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetTagFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'tagId',
            'createdAt',
            'name',
            'color',
        ];
    }
}
