<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContact;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetContactFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'contactId',
            'name',
            'origin',
            'timeZone',
            'activities',
            'changedOn',
            'createdOn',
            'campaign',
            'email',
            'dayOfCycle',
            'scoring',
            'engagementScore',
            'href',
            'note',
            'ipAddress',
            'geolocation',
            'tags',
            'customFieldValues',
        ];
    }
}
