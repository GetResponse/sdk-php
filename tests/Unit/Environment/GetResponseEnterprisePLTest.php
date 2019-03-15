<?php

namespace Getresponse\Sdk\Client\Test\Unit\Environment;

use Getresponse\Sdk\Environment\GetResponseEnterprisePL;
use GuzzleHttp\Psr7\Request;

/**
 * Class GetResponseEnterprisePLTest
 * @package Getresponse\Sdk\Client\Test\Unit\Environment
 */
class GetResponseEnterprisePLTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GetResponseEnterprisePL
     */
    private $systemUnderTest;

    protected function setUp()
    {
        $this->systemUnderTest = new GetResponseEnterprisePL('custom-domain.getresponse360.pl');
    }

    /**
     * @test
     */
    public function shouldReturnUrl()
    {
        self::assertEquals('https://api3.getresponse360.pl', $this->systemUnderTest->getUrl());
    }

    /**
     * @test
     */
    public function shouldAddXDomainHeaderToRequestDuringProcessing()
    {
        $request = new Request('GET', 'https://api3.getresponse360.pl/v3/accounts');

        $processedRequest = $this->systemUnderTest->processRequest($request);

        self::assertTrue($processedRequest->hasHeader('X-Domain'));
        self::assertEquals('custom-domain.getresponse360.pl', $processedRequest->getHeaderLine('X-Domain'));
    }

    /**
     * @test
     * @dataProvider invalidDomainProvider
     * @expectedException \Getresponse\Sdk\Client\Exception\InvalidDomainException
     *
     * @param string $domain
     */
    public function shouldThrowExceptionIfDomainIsNotValid($domain)
    {
        new GetResponseEnterprisePL($domain);
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
