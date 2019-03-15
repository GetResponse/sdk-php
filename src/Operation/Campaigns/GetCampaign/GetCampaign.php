<?php
namespace Getresponse\Sdk\Operation\Campaigns\GetCampaign;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaign extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns/{campaignId}';

    /** @var string */
    private $campaignId;

    /** @var GetCampaignFields */
    private $fields;


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
     * @param GetCampaignFields $fields
     * @return $this
     */
    public function setFields(GetCampaignFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
