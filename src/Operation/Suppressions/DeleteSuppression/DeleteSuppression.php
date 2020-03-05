<?php
namespace Getresponse\Sdk\Operation\Suppressions\DeleteSuppression;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteSuppression extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/suppressions/{suppressionId}';

    /** @var string */
    private $suppressionId;


    /**
     * @param string $suppressionId
     */
    public function __construct($suppressionId)
    {
        $this->suppressionId = $suppressionId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{suppressionId}'],
            [$this->suppressionId],
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
