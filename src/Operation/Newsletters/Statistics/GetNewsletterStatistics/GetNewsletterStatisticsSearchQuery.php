<?php
namespace Getresponse\Sdk\Operation\Newsletters\Statistics\GetNewsletterStatistics;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetNewsletterStatisticsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'groupBy',
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
     * @param DateRangeSearch $createdOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCreatedOn(DateRangeSearch $createdOn)
    {
        return $this->set('createdOn', $createdOn->toArray());
    }
}
