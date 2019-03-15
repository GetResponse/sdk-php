<?php
namespace Getresponse\Sdk\Operation\Newsletters\Statistics\GetStatistics;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetStatisticsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'groupBy',
            'newsletterId',
            'campaignId',
            'createdOn',
        ];
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupByIsTotal()
    {
        return $this->set('groupBy', 'total');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupByIsHour()
    {
        return $this->set('groupBy', 'hour');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupByIsDay()
    {
        return $this->set('groupBy', 'day');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereGroupByIsMonth()
    {
        return $this->set('groupBy', 'month');
    }


    /**
     * @param string $newsletterId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereNewsletterId($newsletterId)
    {
        return $this->set('newsletterId', $newsletterId);
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
