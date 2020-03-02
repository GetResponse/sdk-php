<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\Statistics\GetStatistics;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\QueryEnum;
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
            'tagged',
            'tagId',
            'timeFrame',
        ];
    }


    /**
     * @param string $groupBy
     */
    public function __construct($groupBy)
    {
        $this->setGroupBy($groupBy);
    }


    /**
     * @param string $value
     */
    private function setGroupBy($value)
    {
        $enum = new QueryEnum('string', ['total','day'], $value);
        $this->set('groupBy', $enum->getValue());
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
     * @param DateRangeSearch $timeFrame
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereTimeFrame(DateRangeSearch $timeFrame)
    {
        return $this->set('timeFrame', $timeFrame->toArray());
    }
}
