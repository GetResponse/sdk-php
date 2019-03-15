<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletters;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetNewslettersSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'subject',
            'status',
            'type',
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
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsDraft()
    {
        return $this->set('type', 'draft');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsBroadcast()
    {
        return $this->set('type', 'broadcast');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsSplittest()
    {
        return $this->set('type', 'splittest');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsAutomation()
    {
        return $this->set('type', 'automation');
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
