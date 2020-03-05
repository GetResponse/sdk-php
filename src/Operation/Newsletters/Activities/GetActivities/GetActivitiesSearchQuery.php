<?php
namespace Getresponse\Sdk\Operation\Newsletters\Activities\GetActivities;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetActivitiesSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'activity',
            'createdOn',
        ];
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereActivityIsSend()
    {
        return $this->set('activity', 'send');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereActivityIsOpen()
    {
        return $this->set('activity', 'open');
    }


    /**
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereActivityIsClick()
    {
        return $this->set('activity', 'click');
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
