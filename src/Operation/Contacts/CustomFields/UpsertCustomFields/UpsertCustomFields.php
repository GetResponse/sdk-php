<?php
namespace Getresponse\Sdk\Operation\Contacts\CustomFields\UpsertCustomFields;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpsertContactCustomFields;

class UpsertCustomFields extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/contacts/{contactId}/custom-fields';

    /** @var UpsertContactCustomFields */
    protected $data;

    /** @var string */
    private $contactId;


    /**
     * @param UpsertContactCustomFields $data
     * @param string $contactId
     */
    public function __construct(UpsertContactCustomFields $data, $contactId)
    {
        $this->data = $data;
        $this->contactId = $contactId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{contactId}'],
            [$this->contactId],
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
