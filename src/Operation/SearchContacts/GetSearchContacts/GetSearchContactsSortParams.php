<?php
namespace Getresponse\Sdk\Operation\SearchContacts\GetSearchContacts;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetSearchContactsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'createdOn',
        ];
    }
}
