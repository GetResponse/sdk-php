# Creating API Client and handling requests.

## Before you begin
This is a general method. Please consider using the dedicated factory functions as described in [Initialization by factory](client.md#initialization-by-factory).


## Initialization

Example basic initialization with required arguments:

```
// $apiKey - your GetResponse API Key
$client = new GetresponseClient(
    new CurlRequestHandler(),  
    new GetResponse(),
    new ApiKey($apiKey),
);
```    

Constructor's parameters:

```php
 public function __construct(
     RequestHandler $requestHandler,
     Environment $environment,
     AuthenticationProvider $authentication
 )
```

 * `RequestHandler` - implementation of `RequestHandler` interface, we provide two handlers:
   * `CurlRequestHandler` - basic cURL based handler for single requests or sequential multi requests
   * `CurlMultiRequestHandler` - cURL handler with simultaneous requests support. Use this handler for handling big number of requests to speed up an operation, please note maximum number of concurrent request is limited by throttling limits ([Refer to API limit and throttling documentation](https://apidocs.getresponse.com/v3/limits))
 * `Enviroment` - one of (depending on the API you use):
   * `GetResponse`
   * `GetResponseEnterprisePL`
   * `GetResponseEnterpriseUS`
 * `AuthenticationProvider` - we support:
   * `ApiKey`
   * `OAuth`

## Initialization by factory

We strongly suggest you use the dedicated factory methods to initialize the preconfigured client. Depending on your project you can use:

* `GetresponseClientFactory::createWithApiKey($apiKey)` - returns the client configured for GetResponse environment and the ApiKey authorization method
* `GetresponseClientFactory::createEnterprisePLWithApiKey($apiKey, $domain)` - returns the client configured for the Enterprise PL environment and the ApiKey authorization method
* `GetresponseClientFactory::createEnterpriseUSWithApiKey($apiKey, $domain)` - returns the client configured for the Enterprise US environment and the ApiKey authorization method
* `GetresponseClientFactory::createWithAccessToken($accessToken)` - returns the client configured for the GetResponse environment and the OAuth2 authorization method
* `GetresponseClientFactory::createEnterprisePLWithAccessToken($accessToken, $domain)` - returns the client configured for the GetResponse Enterprise PL environment and the OAuth2 authorization method
* `GetresponseClientFactory::createEnterpriseUSWithAccessToken($accessToken, $domain)` - returns the client configured for the GetResponse Enterprise US environment and OAuth2 authorization method

[Where do I find the API Key?](https://www.getresponse.com/help/integrations-and-api/where-do-i-find-the-api-key.html)

## Executing calls  

Below is the list of the available functions:
* `call($operation)` - calls a single operation and returns the response (`ResponseInterface`).
* `callMany($array)` - calls an array of operations, returns an iterable collection of responses. Note the way the `callMany` behavior depends on your RequestHandler:
  * `CurlRequestHandler` performs requests sequentially, one by one.
  * `CurlMultiRequestHandler` performs requests simultaneously. Maximum number of concurrent request is limited by throttling limits ( [Refer to API documentation](https://apidocs.getresponse.com/v3/limits) ). Please note the `MAX_CALLS_LIMIT` constant setting - the array of operations can't exceeds this limit. Otherwise, you will get an exception. Both limits apply.


## Logging and debugging

[See "Logging and debugging" section.](client_debugging.md)


___

[Back](../../README.md)
