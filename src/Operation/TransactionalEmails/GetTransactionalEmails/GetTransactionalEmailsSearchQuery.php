<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\GetTransactionalEmails;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetTransactionalEmailsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'tagged',
            'tagId',
            'sentOn',
        ];
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTaggedIsTrue()
    {
        return $this->set('tagged', 'true');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTaggedIsFalse()
    {
        return $this->set('tagged', 'false');
    }


    /**
     * @param string $tagId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTagId($tagId)
    {
        return $this->set('tagId', $tagId);
    }


    /**
     * @param DateRangeSearch $sentOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereSentOn(DateRangeSearch $sentOn)
    {
        return $this->set('sentOn', $sentOn->toArray());
    }
}
