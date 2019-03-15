<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Statistics\GetAutorespondersStatistics;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetAutorespondersStatisticsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'groupBy',
            'autoreponderId',
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
     * @param string $autoreponderId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereAutoreponderId($autoreponderId)
    {
        return $this->set('autoreponderId', $autoreponderId);
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
