<?php

namespace Getresponse\Sdk\Environment;

use Getresponse\Sdk\Client\Environment\Environment;
use Getresponse\Sdk\Client\Exception\InvalidDomainException;
use Psr\Http\Message\RequestInterface;

/**
 * Class GetResponseEnterprise
 * @package Getresponse\Sdk\Environment
 */
abstract class GetResponseEnterprise implements Environment
{
    /**
     * @var string
     */
    private $domain;

    /**
     * GetResponseEnterprise constructor.
     * @param string $domain
     * @throws InvalidDomainException
     */
    public function __construct($domain)
    {
        $this->validateDomain($domain);
        $this->domain = $domain;
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function processRequest(RequestInterface $request)
    {
        return $request->withHeader('X-Domain', $this->domain);
    }

    /**
     * @param string $domain
     * @throws InvalidDomainException
     */
    private function validateDomain($domain)
    {
        if (!preg_match('/^(?!www\\.)(?:(?:[a-zA-Z0-9]|(?<=[a-zA-Z0-9])-+(?=[a-zA-Z0-9])){1,63}\\.)+[a-zA-Z]{2,8}$/i', $domain)) {
            throw new InvalidDomainException('The provided GetResponse Enterprise domain is invalid');
        }
    }
}
