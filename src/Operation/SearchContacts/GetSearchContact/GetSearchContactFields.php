<?php
namespace Getresponse\Sdk\Operation\SearchContacts\GetSearchContact;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetSearchContactFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'subscribersType',
            'sectionLogicOperator',
            'section',
            'searchContactId',
            'name',
            'createdOn',
            'href',
        ];
    }
}
