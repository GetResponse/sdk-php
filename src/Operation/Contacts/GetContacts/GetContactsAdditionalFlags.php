<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetContactsAdditionalFlags extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'exactMatch',
        ];
    }
}
