<?php
namespace Getresponse\Sdk\Operation\Tracking\GetTracking;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTracking extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/tracking';

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
}
