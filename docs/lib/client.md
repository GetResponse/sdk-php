# Creating API Client and handling requests.

## Initialization

_This is a direct method. Please consider using the dedicated factory functions as described in [Initialization by factory](client.md#initialization-by-factory)._

Example basic initialization with required arguments:

```php
<?php

use Getresponse\Sdk\Client\GetresponseClient;
use Getresponse\Sdk\Client\Handler\CurlRequestHandler;
use Getresponse\Sdk\Environment\GetResponse;
use Getresponse\Sdk\Authentication\ApiKey;

// $apiKey - your GetResponse API Key
$apiKey = 'my_api_key';

$client = new GetresponseClient(
    new CurlRequestHandler(),  
    new GetResponse(),
    new ApiKey($apiKey)
);
```    

`GetresponseClient` constructor's parameters are:

 1. `RequestHandler $requestHandler`,
 2. `Environment $environment`,
 3. `AuthenticationProvider $authentication`

 * `RequestHandler` - implementation of `RequestHandler` interface, we provide two handlers:
   * `CurlRequestHandler` - basic cURL based handler for single requests or sequential multi requests
   * `CurlMultiRequestHandler` - cURL handler with simultaneous requests support. Use this handler for handling big number of requests to speed up the processing, please note maximum number of concurrent request is limited by throttling limits ([Refer to API limit and throttling documentation](https://apidocs.getresponse.com/v3/limits))
 * `Enviroment` implementation - one of the following (depending on your account type):
   * `GetResponse` - for Basic, Plus and Professional package users
   * `GetResponseEnterprisePL` - for Enterprise users (ask your Account Manager for details)
   * `GetResponseEnterpriseUS` - for Enterprise users (ask your Account Manager for details)
 * `AuthenticationProvider` implementation - we provide:
   * `ApiKey` - API Key based authentication
   * `OAuth` - OAuth2 access token base authentication

## Initialization by factory

We strongly suggest you use the dedicated factory methods to initialize the preconfigured client. Depending on your project you can use:

* `GetresponseClientFactory::createWithApiKey($apiKey)` - returns the client configured for GetResponse environment and the API Key authorization method
* `GetresponseClientFactory::createEnterprisePLWithApiKey($apiKey, $domain)` - returns the client configured for the Enterprise PL environment and the API Key authorization method
* `GetresponseClientFactory::createEnterpriseUSWithApiKey($apiKey, $domain)` - returns the client configured for the Enterprise US environment and the API Key authorization method
* `GetresponseClientFactory::createWithAccessToken($accessToken)` - returns the client configured for the GetResponse environment and the OAuth2 authorization method
* `GetresponseClientFactory::createEnterprisePLWithAccessToken($accessToken, $domain)` - returns the client configured for the GetResponse Enterprise PL environment and the OAuth2 authorization method
* `GetresponseClientFactory::createEnterpriseUSWithAccessToken($accessToken, $domain)` - returns the client configured for the GetResponse Enterprise US environment and the OAuth2 authorization method

[Where do I find the API Key?](https://www.getresponse.com/help/integrations-and-api/where-do-i-find-the-api-key.html)

## Executing calls  

Below is the list of the available functions:
* `call($operation)` - calls a single operation and returns the response (`ResponseInterface`).
* `callMany($array)` - calls an array of operations, returns an iterable collection of responses. Note the way the `callMany` behavior depends on your RequestHandler:
  * `CurlRequestHandler` performs requests sequentially, one by one.
  * `CurlMultiRequestHandler` performs requests simultaneously. Maximum number of concurrent request is limited by throttling limits ([Read more in API Docs](https://apidocs.getresponse.com/v3/limits)). Please note the `MAX_CALLS_LIMIT` constant setting - the array of operations can't exceeds this limit. Otherwise, you will get an exception. Both limits apply.


## Logging and debugging

[See "Logging and debugging" section.](client_debugging.md)


___

[Back](../../README.md)
