<?php
namespace Getresponse\Sdk\Operation\Tags\GetTags;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetTagsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdAt',
        ];
    }
}
