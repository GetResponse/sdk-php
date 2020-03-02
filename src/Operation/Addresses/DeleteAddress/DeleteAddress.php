<?php
namespace Getresponse\Sdk\Operation\Addresses\DeleteAddress;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteAddress extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/addresses/{addressId}';

    /** @var string */
    private $addressId;


    /**
     * @param string $addressId
     */
    public function __construct($addressId)
    {
        $this->addressId = $addressId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{addressId}'],
            [$this->addressId],
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
        return Operation::DELETE;
    }


    /**
     * @return string
     */
    public function getBody()
    {
        return '';
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 204;
    }
}
