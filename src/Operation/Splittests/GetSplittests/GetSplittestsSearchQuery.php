<?php
namespace Getresponse\Sdk\Operation\Splittests\GetSplittests;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetSplittestsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'type',
            'status',
            'createdOn',
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
     * @param string $type
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereType($type)
    {
        return $this->set('type', $type);
    }


    /**
     * @param string $status
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereStatus($status)
    {
        return $this->set('status', $status);
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
