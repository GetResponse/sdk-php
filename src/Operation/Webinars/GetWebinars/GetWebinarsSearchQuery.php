<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinars;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetWebinarsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'campaignId',
            'status',
            'type',
        ];
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
    public function whereStatusIsUpcoming()
    {
        return $this->set('status', 'upcoming');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsFinished()
    {
        return $this->set('status', 'finished');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsPublished()
    {
        return $this->set('status', 'published');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatusIsUnpublished()
    {
        return $this->set('status', 'unpublished');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsAll()
    {
        return $this->set('type', 'all');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsLive()
    {
        return $this->set('type', 'live');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTypeIsOnDemand()
    {
        return $this->set('type', 'on_demand');
    }
}
