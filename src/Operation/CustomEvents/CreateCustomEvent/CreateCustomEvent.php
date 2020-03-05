<?php
namespace Getresponse\Sdk\Operation\CustomEvents\CreateCustomEvent;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\NewCustomEvent;

class CreateCustomEvent extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-events';

    /** @var NewCustomEvent */
    protected $data;


    /**
     * @param NewCustomEvent $data
     */
    public function __construct(NewCustomEvent $data)
    {
        $this->data = $data;
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
        return 201;
    }
}
