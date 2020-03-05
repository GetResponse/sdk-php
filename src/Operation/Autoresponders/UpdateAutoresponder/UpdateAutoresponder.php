<?php
namespace Getresponse\Sdk\Operation\Autoresponders\UpdateAutoresponder;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateAutoresponder as ModelUpdateAutoresponder;

class UpdateAutoresponder extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/autoresponders/{autoresponderId}';

    /** @var ModelUpdateAutoresponder */
    protected $data;

    /** @var string */
    private $autoresponderId;


    /**
     * @param ModelUpdateAutoresponder $data
     * @param string $autoresponderId
     */
    public function __construct(ModelUpdateAutoresponder $data, $autoresponderId)
    {
        $this->data = $data;
        $this->autoresponderId = $autoresponderId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{autoresponderId}'],
            [$this->autoresponderId],
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
