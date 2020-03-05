<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetPredefinedFieldsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'campaignId',
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
}
