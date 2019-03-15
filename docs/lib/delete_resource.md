# Deleting resources

Example code

```php

use Getresponse\Sdk\Operation\Contacts\DeleteContact\DeleteContact;
use Getresponse\Sdk\Operation\Contacts\DeleteContact\DeleteContactUrlQueryParameters;
use Getresponse\Sdk\GetresponseClientFactory;

$deleteContactOperation = new DeleteContact('aad');

// Delete may allow adding some additional parameters. To achieve it, look for classes containing the prefix "UrlQueryParameters"
$deleteContactParams = new DeleteContactUrlQueryParameters();
$deleteContactParams->setIpAddress('127.0.0.1');
$deleteContactOperation->setUrlParameterQuery($deleteContactParams);

$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$response = $client->call($deleteContactParams);

if ($response->isSuccess()) {
    print 'OK';
}
```
___

[Back](../../README.md)
