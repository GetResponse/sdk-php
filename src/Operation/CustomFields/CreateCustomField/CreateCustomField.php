<?php
namespace Getresponse\Sdk\Operation\CustomFields\CreateCustomField;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\NewCustomField;

class CreateCustomField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-fields';

    /** @var NewCustomField */
    protected $data;


    /**
     * @param NewCustomField $data
     */
    public function __construct(NewCustomField $data)
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
