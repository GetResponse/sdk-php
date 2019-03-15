<?php

namespace Getresponse\Sdk;

use Getresponse\Sdk\Client\Debugger\DataCollector;
use Getresponse\Sdk\Client\Debugger\Debugger;
use Getresponse\Sdk\Client\Debugger\DebugLogger;
use Getresponse\Sdk\Client\Debugger\Logger;
use Getresponse\Sdk\Client\Exception\InvalidDomainException;
use Getresponse\Sdk\Client\GetresponseClient;
use Getresponse\Sdk\Client\Handler\CurlRequestHandler;
use Getresponse\Sdk\Authentication\ApiKey;
use Getresponse\Sdk\Authentication\OAuth;
use Getresponse\Sdk\Environment\GetResponse;
use Getresponse\Sdk\Environment\GetResponseEnterprisePL;
use Getresponse\Sdk\Environment\GetResponseEnterpriseUS;

/**
 * Class GetresponseClientFactory
 * @package Getresponse\Sdk\Client
 */
class GetresponseClientFactory
{
    /**
     * @param string $apiKey
     * @return GetresponseClient
     */
    public static function createWithApiKey($apiKey)
    {
        return new GetresponseClient(
            new CurlRequestHandler(),
            new GetResponse(),
            new ApiKey($apiKey)
        );
    }

    /**
     * @param string $apiKey
     * @param string $domain
     * @return GetresponseClient
     * @throws InvalidDomainException
     */
    public static function createEnterprisePLWithApiKey($apiKey, $domain)
    {
        return new GetresponseClient(
            new CurlRequestHandler(),
            new GetResponseEnterprisePL($domain),
            new ApiKey($apiKey)
        );
    }

    /**
     * @param string $apiKey
     * @param string $domain
     * @return GetresponseClient
     * @throws InvalidDomainException
     */
    public static function createEnterpriseUSWithApiKey($apiKey, $domain)
    {
        return new GetresponseClient(
            new CurlRequestHandler(),
            new GetResponseEnterpriseUS($domain),
            new ApiKey($apiKey)
        );
    }

    /**
     * @param string $accessToken
     * @return GetresponseClient
     */
    public static function createWithAccessToken($accessToken)
    {
        return new GetresponseClient(
            new CurlRequestHandler(),
            new GetResponse(),
            new OAuth($accessToken)
        );
    }

    /**
     * @param string $accessToken
     * @param string $domain
     * @return GetresponseClient
     * @throws InvalidDomainException
     */
    public static function createEnterprisePLWithAccessToken($accessToken, $domain)
    {
        return new GetresponseClient(
            new CurlRequestHandler(),
            new GetResponseEnterprisePL($domain),
            new OAuth($accessToken)
        );
    }

    /**
     * @param string $accessToken
     * @param string $domain
     * @return GetresponseClient
     * @throws InvalidDomainException
     */
    public static function createEnterpriseUSWithAccessToken($accessToken, $domain)
    {
        return new GetresponseClient(
            new CurlRequestHandler(),
            new GetResponseEnterpriseUS($domain),
            new OAuth($accessToken)
        );
    }
    
    /**
     * @param GetresponseClient $client
     * @return Debugger
     */
    public static function createDebugger(GetresponseClient $client)
    {
        $dataCollector = new DataCollector();
        $client->setLogger(new Logger(new DebugLogger($dataCollector)));
        return new Debugger($dataCollector);
    }
}
