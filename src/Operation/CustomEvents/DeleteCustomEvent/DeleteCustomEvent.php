<?php
namespace Getresponse\Sdk\Operation\CustomEvents\DeleteCustomEvent;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteCustomEvent extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-events/{customEventId}';

    /** @var string */
    private $customEventId;


    /**
     * @param string $customEventId
     */
    public function __construct($customEventId)
    {
        $this->customEventId = $customEventId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{customEventId}'],
            [$this->customEventId],
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
