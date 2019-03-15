<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\Statistics\GetRssNewslettersStatistics;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetRssNewslettersStatisticsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'groupBy',
            'rssNewsletterId',
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
     * @param string $rssNewsletterId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereRssNewsletterId($rssNewsletterId)
    {
        return $this->set('rssNewsletterId', $rssNewsletterId);
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
