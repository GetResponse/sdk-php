<?php

namespace Getresponse\Sdk\Environment;

use Getresponse\Sdk\Client\Environment\Environment;
use Psr\Http\Message\RequestInterface;

/**
 * Class GetResponse
 * @package Getresponse\Sdk\Environment
 */
class GetResponse implements Environment
{
    const URL = 'https://api.getresponse.com';

    /**
     * @return string
     */
    public function getUrl()
    {
        return self::URL;
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function processRequest(RequestInterface $request)
    {
        // no processing required
        return $request;
    }
}
