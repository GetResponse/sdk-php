<?php
namespace Getresponse\Sdk\Operation\SearchContacts\GetSearchContacts;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetSearchContactsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'searchContactId',
            'name',
            'createdOn',
            'href',
        ];
    }
}
