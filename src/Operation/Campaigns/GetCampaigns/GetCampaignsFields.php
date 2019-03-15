<?php
namespace Getresponse\Sdk\Operation\Campaigns\GetCampaigns;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetCampaignsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'description',
            'campaignId',
            'name',
            'languageCode',
            'isDefault',
            'createdOn',
            'href',
        ];
    }
}
