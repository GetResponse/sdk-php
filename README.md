# GetResponse APIv3 PHP SDK

This document covers the basics of using SDK for PHP. For detailed documentation, please refer to the resources in [docs](docs) directory:

* [Client](docs/lib/client.md) - basic API client usage
* [Client Debugging](docs/lib/client_debugging.md) - how to log API communication, and debug the integration
* [Getting lists of resources](docs/lib/get_list_of_resources.md)
* [Getting resource details](docs/lib/get_resource_details.md)
* [Create resources](docs/lib/create_resource.md) - building data models and creating resources
* [Deleting resources](docs/lib/delete_resource.md)
* [Updating resources](docs/lib/update_resource.md)
* [Upgrade guide](UPGRADING.md) - upgrading from 1.x version to 2.x

Read more about the API in [GetResponse API Docs](https://apidocs.getresponse.com/v3) and [GetResponse API Reference](https://apireference.getresponse.com/).

## Requirements

* PHP 5.5+

* [cURL](https://secure.php.net/manual/en/book.curl.php)

* Composer or git

## SDK installation

### Using Composer

```
composer require getresponse/sdk-php
```

See [https://getcomposer.org](https://getcomposer.org) for details.

### Using git

We recommend the `composer` installation. However, you can get SDK PHP by cloning the git project:

```

git clone https://github.com/GetResponse/sdk-php.git

```

The releases are available on GitHub: [https://github.com/GetResponse/sdk-php/releases](https://github.com/GetResponse/sdk-php/releases)

## Creating client

To create a GetResponse client object, use:

```php
<?php

use Getresponse\Sdk\GetresponseClientFactory;

$client = GetresponseClientFactory::createWithApiKey('my_api_key');

```

API_KEY should be defined in the environment variable. You should define it in the global environment, command line of the script, or by putenv() during the startup of your framework ([where do I find the API Key?](https://www.getresponse.com/help/integrations-and-api/where-do-i-find-the-api-key.html))

Please see the `GetResponseClientFactory` class from `PHP SDK` for other factories.

### Enterprise users

For the Enterprise environment please use one of the Enterprise factories, e.g.:

```php
<?php

use Getresponse\Sdk\GetresponseClientFactory;

$client = GetresponseClientFactory::createEnterprisePLWithApiKey('my_api_key', 'myexampledomain.com');

```
or:

```php
<?php

use Getresponse\Sdk\GetresponseClientFactory;

$client = GetresponseClientFactory::createEnterpriseUSWithApiKey('my_api_key', 'myexampledomain.com');

```

You have to provide the domain registered in GetResponse. Please see the `GetResponseClientFactory` class from `Getresponse\Sdk` namespace for other functions and other authorization methods.

## Processing single and multiple operations

To send a single operation (request), you have to create an operation object (possibly with params) and send by defined client.

Example:

```php
<?php

use Getresponse\Sdk\Operation\Campaigns\GetCampaigns\GetCampaigns;

$campaignsOperation = new GetCampaigns();
$response = $client->call($campaignsOperation);

```

As a result, you will get a response object.

You can send multiple operations with one request. This will speed up operations with parallel processing. Please note that throttling limits will apply ([read more in API limits and throttling documentation](https://apidocs.getresponse.com/v3/limits)).

```php
<?php

$operationsArray = array($operation1, $operation2, $operation3);
$responsesCollection = $client->callMany($operationsArray);

```

As a result, you will get a collection of responses. The responses are in the same order as the operations in an array.

## Handling responses

To get a response, call:

```php
<?php

$response = $client->call($campaignsOperation);

```

### Checking response status

To determine if a response was successful, use:

```php
<?php

$response->isSuccess();

```

To get HTTP status of response, use:

```php
<?php

$response->getResponse()->getStatusCode();

```

### Response data

The response is compatible with [PSR-7](https://www.php-fig.org/psr/psr-7/).


Examples:

To get the data from response (as array):

```php
<?php

$response->getData();

```

To get unprocessed data, from a response (in a serialized JSON format):

```php
<?php

$response->getResponse()->getBody()->getContents();

```

To get the response size:

```php
<?php

$response->getResponse()->getBody()->getSize();

```

To get the pagination data:

```php
<?php

$response->isPaginated();

$response->getPaginationValues();

```
