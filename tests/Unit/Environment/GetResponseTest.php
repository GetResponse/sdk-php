<?php

namespace Getresponse\Sdk\Client\Test\Unit\Environment;

use Getresponse\Sdk\Environment\GetResponse;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

/**
 * Class GetResponseTest
 * @package Getresponse\Sdk\Client\Test\Unit\Environment
 */
class GetResponseTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnUrl()
    {
        $systemUnderTest = new GetResponse();

        self::assertEquals('https://api.getresponse.com', $systemUnderTest->getUrl());
    }

    /**
     * @test
     */
    public function shouldNotChangeRequestDuringProcessing()
    {
        $systemUnderTest = new GetResponse();

        $request = new Request('GET', 'https://api.getresponse.com/v3/accounts');

        self::assertSame($request, $systemUnderTest->processRequest($request));
    }
}
