<?php
namespace Getresponse\Sdk\Operation\Campaigns\Statistics\Locations\GetCampaignStatisticsLocations;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaignStatisticsLocations extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns/statistics/locations';

    /** @var GetCampaignStatisticsLocationsSearchQuery */
    private $query;


    /**
     * @param GetCampaignStatisticsLocationsSearchQuery $query
     */
    public function __construct(GetCampaignStatisticsLocationsSearchQuery $query)
    {
        $this->query = $query;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, null);
    }
}
