<?php

namespace Getresponse\Sdk\Client\Test\Unit\Environment;

use Getresponse\Sdk\Environment\GetResponseEnterpriseUS;
use GuzzleHttp\Psr7\Request;

/**
 * Class GetResponseEnterpriseUSTest
 * @package Getresponse\Sdk\Client\Test\Unit\Environment
 */
class GetResponseEnterpriseUSTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var GetResponseEnterpriseUS
     */
    private $systemUnderTest;

    protected function setUp(): void
    {
        $this->systemUnderTest = new GetResponseEnterpriseUS('custom-domain.getresponse360.com');
    }

    /**
     * @test
     */
    public function shouldReturnUrl()
    {
        self::assertEquals('https://api3.getresponse360.com', $this->systemUnderTest->getUrl());
    }

    /**
     * @test
     */
    public function shouldAddXDomainHeaderToRequestDuringProcessing()
    {
        $request = new Request('GET', 'https://api3.getresponse360.com/v3/accounts');

        $processedRequest = $this->systemUnderTest->processRequest($request);

        self::assertTrue($processedRequest->hasHeader('X-Domain'));
        self::assertEquals('custom-domain.getresponse360.com', $processedRequest->getHeaderLine('X-Domain'));
    }

    /**
     * @test
     * @dataProvider invalidDomainProvider
     *
     * @param string $domain
     */
    public function shouldThrowExceptionIfDomainIsNotValid($domain)
    {
        $this->expectException(\Getresponse\Sdk\Client\Exception\InvalidDomainException::class);
        new GetResponseEnterpriseUS($domain);
    }

    /**
     * @return array
     */
    public function invalidDomainProvider()
    {
        return [
            ['invalid-domain'],
            ['https://example.com'],
            ['in:valid']
        ];
    }
}
