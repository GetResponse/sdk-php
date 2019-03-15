<?php
namespace Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetContactsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'email',
            'name',
            'createdOn',
        ];
    }


    /**
     * @param string $email
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereEmail($email)
    {
        return $this->set('email', $email);
    }


    /**
     * @param string $name
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereName($name)
    {
        return $this->set('name', $name);
    }


    /**
     * @param DateRangeSearch $createdOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCreatedOn(DateRangeSearch $createdOn)
    {
        return $this->set('createdOn', $createdOn->toArray());
    }
}
