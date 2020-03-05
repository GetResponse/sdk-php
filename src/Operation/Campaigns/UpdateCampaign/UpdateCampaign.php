<?php
namespace Getresponse\Sdk\Operation\Campaigns\UpdateCampaign;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateCampaign as ModelUpdateCampaign;

class UpdateCampaign extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns/{campaignId}';

    /** @var ModelUpdateCampaign */
    protected $data;

    /** @var string */
    private $campaignId;


    /**
     * @param ModelUpdateCampaign $data
     * @param string $campaignId
     */
    public function __construct(ModelUpdateCampaign $data, $campaignId)
    {
        $this->data = $data;
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
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 200;
    }
}
