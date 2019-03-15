<?php
namespace Getresponse\Sdk\Operation\Autoresponders\GetAutoresponders;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetAutorespondersSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'subject',
            'name',
            'status',
            'campaignId',
            'type',
            'triggerType',
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
     * @param string $name
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereName($name)
    {
        return $this->set('name', $name);
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
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsTimebase()
    {
        return $this->set('type', 'timebase');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsActionbase()
    {
        return $this->set('type', 'actionbase');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTriggerTypeIsOnday()
    {
        return $this->set('triggerType', 'onday');
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
