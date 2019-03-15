<?php
namespace Getresponse\Sdk\Operation\LandingPages\GetLandingPages;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetLandingPagesSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
            'domain',
            'campaignId',
        ];
    }
}
