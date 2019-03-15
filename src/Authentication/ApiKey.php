<?php

namespace Getresponse\Sdk\Authentication;

use Getresponse\Sdk\Client\Authentication\AuthenticationProvider;
use Psr\Http\Message\RequestInterface;

/**
 * Class ApiKey
 * @package Getresponse\Sdk\Authentication
 */
class ApiKey implements AuthenticationProvider
{
    const HEADER_PREFIX = 'api-key ';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * ApiKey constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function authenticate(RequestInterface $request)
    {
        return $request->withHeader('X-Auth-Token', self::HEADER_PREFIX . $this->apiKey);
    }
}
