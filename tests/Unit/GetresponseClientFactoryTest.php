<?php

namespace Getresponse\Sdk\Client\Test\Unit;

use Getresponse\Sdk\Client\GetresponseClient;
use Getresponse\Sdk\GetresponseClientFactory;

/**
 * Class GetresponseClientFactoryTest
 * @package Getresponse\Sdk\Client\Test\Unit
 */
class GetresponseClientFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldCreateWithApiKey()
    {
        $client = GetresponseClientFactory::createWithApiKey('apiKey');

        self::assertInstanceOf(GetresponseClient::class, $client);
    }

    /**
     * @test
     */
    public function shouldCreateEnterprisePLWithApiKey()
    {
        $client = GetresponseClientFactory::createEnterprisePLWithApiKey('apiKey', 'domain.com');

        self::assertInstanceOf(GetresponseClient::class, $client);
    }

    /**
     * @test
     */
    public function shouldCreateEnterpriseUSWithApiKey()
    {
        $client = GetresponseClientFactory::createEnterpriseUSWithApiKey('apiKey', 'domain.com');

        self::assertInstanceOf(GetresponseClient::class, $client);
    }

    /**
     * @test
     */
    public function shouldCreateWithAccessToken()
    {
        $client = GetresponseClientFactory::createWithAccessToken('accessToken');

        self::assertInstanceOf(GetresponseClient::class, $client);
    }

    /**
     * @test
     */
    public function shouldCreate360PLWithAccessToken()
    {
        $client = GetresponseClientFactory::createEnterprisePLWithAccessToken('accessToken', 'domain.com');

        self::assertInstanceOf(GetresponseClient::class, $client);
    }

    /**
     * @test
     */
    public function shouldCreateEnterpriseUSWithAccessToken()
    {
        $client = GetresponseClientFactory::createEnterpriseUSWithAccessToken('accessToken', 'domain.com');

        self::assertInstanceOf(GetresponseClient::class, $client);
    }
}
