<?php
namespace Getresponse\Sdk\Operation\CustomFields\GetCustomFields;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetCustomFieldsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
        ];
    }
}
