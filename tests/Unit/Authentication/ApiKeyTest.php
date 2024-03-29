<?php

namespace Getresponse\Sdk\Client\Test\Unit\Authentication;

use Getresponse\Sdk\Authentication\ApiKey;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

/**
 * Class ApiKeyTest
 * @package Unit\Authentication
 */
class ApiKeyTest extends TestCase
{
    /**
     * @var ApiKey
     */
    private $systemUnderTest;

    protected function setUp(): void
    {
        $this->systemUnderTest = new ApiKey('abcdef123456');
    }

    /**
     * @test
     */
    public function shouldAddXAuthTokenHeader()
    {
        $request = new Request('GET', 'https://api.getresponse.com/v3/contacts', []);

        $authenticatedRequest = $this->systemUnderTest->authenticate($request);

        self::assertTrue($authenticatedRequest->hasHeader('X-Auth-Token'));
        self::assertEquals(['api-key abcdef123456'], $authenticatedRequest->getHeader('X-Auth-Token'));
        self::assertEquals('api-key abcdef123456', $authenticatedRequest->getHeaderLine('X-Auth-Token'));
    }
}
