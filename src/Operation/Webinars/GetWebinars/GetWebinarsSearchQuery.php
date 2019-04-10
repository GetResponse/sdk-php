<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinars;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
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
    public function whereStatusIsDeleted()
    {
        return $this->set('status', 'deleted');
    }
}
