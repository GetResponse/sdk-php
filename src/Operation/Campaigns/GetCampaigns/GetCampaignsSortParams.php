<?php
namespace Getresponse\Sdk\Operation\Campaigns\GetCampaigns;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetCampaignsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'createdOn',
        ];
    }
}
