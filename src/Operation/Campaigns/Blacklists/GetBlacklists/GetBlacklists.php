<?php
namespace Getresponse\Sdk\Operation\Campaigns\Blacklists\GetBlacklists;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetBlacklists extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns/{campaignId}/blacklists';

    /** @var string */
    private $campaignId;

    /** @var GetBlacklistsSearchQuery */
    private $query;


    /**
     * @param string $campaignId
     */
    public function __construct($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{campaignId}'],
            [$this->campaignId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetBlacklistsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetBlacklistsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, null);
    }
}
