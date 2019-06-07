# GetResponse APIv3 PHP SDK


This document covers the basics of using SDK for PHP. For detailed documentation, please refer to the resources in ./lib directory:

* [Client](./docs/lib/client.md) - methods and factories to create API Client
* [Client Debugging](./docs/lib/client_debugging.md) - how to get detailed information from API Client for development purposes
* [Collect list](./docs/lib/collect_list_of_resources.md) - getting lists of resources, with defining queries and sort fields
* [Resource details](./docs/lib/get_resource_details.md) - getting single resource with details
* [Create resources](./docs/lib/create_resource.md) - defining data models and creating resources
* [Delete resources](./docs/lib/delete_resource.md) - deleting resources
* [Updating resources](./docs/lib/update_resource.md) - updating resources



## Requirements

* PHP 5.5+

* [cURL](https://secure.php.net/manual/en/book.curl.php)

* Composer or git

## SDK installation

### By git

We recommend the `composer` installation. However, you can get SDK PHP by cloning the git project:

```

git clone https://github.com/GetResponse/sdk-php.git

```

### Installing Composer

Copy composer.json from the `examples` directory into your project directory and run the `composer install` command in this directory.

You can also integrate with an existing one by running
```
composer require getresponse/sdk-php
```

See [https://getcomposer.org](https://getcomposer.org) for in-depth tutorials.

## Creating client

To create a GetResponse client object, use:

```php

use Getresponse\Sdk\GetresponseClientFactory;

$client = GetresponseClientFactory::createWithApiKey('1234567e590706d0a3e7e5a30053e456');

```

API_KEY should be defined in the environment variable. You should define it in the global environment, command line of the script, or by putenv() during the startup of your framework ([where do I find the API Key?](https://www.getresponse.com/help/integrations-and-api/where-do-i-find-the-api-key.html))

Please see the `GetResponseClientFactory` class from `PHP SDK` for other factories.

### Enterprise users

For the Enterprise environment please use one of the Enterprise factories, e.g.:

```php
use Getresponse\Sdk\GetresponseClientFactory;

$client = GetresponseClientFactory::createEnterprisePLWithApiKey('1234567e590706d0a3e7e5a30053e456', 'myexampledomain.com');

```
or:

```php
use Getresponse\Sdk\GetresponseClientFactory;

$client = GetresponseClientFactory::createEnterpriseUSWithApiKey('1234567e590706d0a3e7e5a30053e456', 'myexampledomain.com');

```

You have to provide the domain registered in GetResponse. Please see the `GetResponseClientFactory` class from `Getresponse\Sdk` namespace for other functions and other authorization methods.

## Processing single and multiple operations

To send a single operation (request), you have to create an operation object (possibly with params) and send by defined client.

Example:

```php

// create $client first
$campaignsOperation = new GetCampaigns();
$response = $client->call($campaignsOperation);

```

As a result, you will get a response object.

You can send multiple operations with one request. This will speed up operations with parallel processing. Please note that throttling limits will apply ([refer to API limit and throttling documentation](https://apidocs.getresponse.com/v3/limits)).

```php

// create $client first
$operationsArray = array($operation1, $operation2, $operation3);
$responsesCollection = $client->callMany($operationsArray);

```

As a result, you will get a collection of responses. The responses are in the same order as the operations in an array.

## Handling responses

To get a response, call:

```php

$response = $client->call($operation);

```

### Checking response status

To determine if a response was successful, use:

```php

$response->isSuccess();

```

To get HTTP status of response, use:

```php
$response->getResponse()->getStatusCode();
```

### Response data

The response is compatible with [PSR-7](https://www.php-fig.org/psr/psr-7/).


Examples:

To get the data from response (in array format):

```php
$response->getData();
```

To get unprocessed data, from a response (in a serialized JSON format):

```php
$response->getResponse()->getBody()->getContents();
```

To get the response size:

```php
$response->getResponse()->getBody()->getSize();
```

To get the pagination data:

```php
$response->isPaginated();

$response->getPaginationValues();
```


---
Refer to [GetResponse API documentation](https://apidocs.getresponse.com/v3).
