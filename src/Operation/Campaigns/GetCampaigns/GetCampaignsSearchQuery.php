<?php
namespace Getresponse\Sdk\Operation\Campaigns\GetCampaigns;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetCampaignsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'isDefault',
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
     * @param string $isDefault
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereIsDefault($isDefault)
    {
        return $this->set('isDefault', $isDefault);
    }
}
