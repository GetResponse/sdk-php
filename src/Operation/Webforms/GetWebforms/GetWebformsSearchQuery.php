<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebforms;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetWebformsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'campaignId',
            'modifiedOn',
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
     * @param DateRangeSearch $modifiedOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereModifiedOn(DateRangeSearch $modifiedOn)
    {
        return $this->set('modifiedOn', $modifiedOn->toArray());
    }
}
