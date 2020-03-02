<?php
namespace Getresponse\Sdk\Operation\Accounts\Callbacks\GetCallbacks;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCallbacks extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/accounts/callbacks';

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
