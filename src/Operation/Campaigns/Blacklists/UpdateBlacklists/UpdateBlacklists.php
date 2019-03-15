<?php
namespace Getresponse\Sdk\Operation\Campaigns\Blacklists\UpdateBlacklists;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateBlacklist;

class UpdateBlacklists extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns/{campaignId}/blacklists';

    /** @var UpdateBlacklist */
    protected $data;

    /** @var string */
    private $campaignId;


    /**
     * @param UpdateBlacklist $data
     * @param string $campaignId
     */
    public function __construct(UpdateBlacklist $data, $campaignId)
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
