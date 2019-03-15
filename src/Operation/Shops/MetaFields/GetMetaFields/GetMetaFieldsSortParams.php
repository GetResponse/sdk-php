<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaFields;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetMetaFieldsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
        ];
    }
}
