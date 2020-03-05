<?php
namespace Getresponse\Sdk\Operation\Accounts\Badge\GetBadge;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetBadge extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/accounts/badge';

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
