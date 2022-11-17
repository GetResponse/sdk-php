<?php

namespace Getresponse\Sdk\Client\Test\Unit\Authentication;

use Getresponse\Sdk\Authentication\OAuth;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

/**
 * Class OAuthTest
 * @package Getresponse\Sdk\Client\Test\Unit\Authentication
 */
class OAuthTest extends TestCase
{
    /**
     * @var OAuth
     */
    private $systemUnderTest;

    protected function setUp(): void
    {
        $this->systemUnderTest = new OAuth('abc123');
    }

    /**
     * @test
     */
    public function shouldAddAuthorizationHeader()
    {
        $request = new Request('GET', 'https://api.getresponse.com/v3/contacts', []);

        $authenticatedRequest = $this->systemUnderTest->authenticate($request);

        self::assertTrue($authenticatedRequest->hasHeader('Authorization'));
        self::assertEquals(['Bearer abc123'], $authenticatedRequest->getHeader('Authorization'));
        self::assertEquals('Bearer abc123', $authenticatedRequest->getHeaderLine('Authorization'));
    }
}
