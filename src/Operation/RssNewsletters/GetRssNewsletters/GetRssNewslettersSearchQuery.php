<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetRssNewslettersSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'subject',
            'status',
            'campaignId',
            'createdOn',
        ];
    }


    /**
     * @param string $subject
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereSubject($subject)
    {
        return $this->set('subject', $subject);
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsEnabled()
    {
        return $this->set('status', 'enabled');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsDisabled()
    {
        return $this->set('status', 'disabled');
    }


    /**
     * @param string $campaignId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCampaignId($campaignId)
    {
        return $this->set('campaignId', $campaignId);
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
