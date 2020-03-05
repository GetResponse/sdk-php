<?php
namespace Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetContactsFields extends ValueList
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
        ];
    }
}
