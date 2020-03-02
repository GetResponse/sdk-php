# Debugging API calls

## Logging requests

Once you set `Logger` using the `$client->setLogger` function, the calls will be logged. The `Logger` class is our wrapper - you should configure it with the PSR-3 logger class:

```php
<?php

use Getresponse\Sdk\Client\Debugger\Logger;
use Getresponse\Sdk\Client\Debugger\DebugLogger;
use Getresponse\Sdk\Client\Debugger\DataCollector;

$dataCollector = new DataCollector();

$client->setLogger(new Logger(new DebugLogger($dataCollector)));
```


DebugLogger implements `LoggerInterface` ([PSR-3](https://www.php-fig.org/psr/psr-3/)). You can use any compliant logger. However, only `DebugLogger` lets you gather data for debugging purposes.

We use the `debug` level to log all requests and responses. By default, SDK is configured with `NullLogger`. So, there is no log output unless you configure the desired one.

**Please note that all requests and responses are logged and they may contain sensitive data.**

Please consider that setting a new logger will overwrite an existing logger.

## Data collector

`DebugLogger` uses `DataCollector` for gathering requests, responses and providing basic metrics:
* `calls` - the number of calls
* `operations` - the array of operations
* `error_count` - all responses with the status code >= `400`
* `total_time` - the total time of all calls

You can collect that data by calling `$dataCollector->getData()`.

## Debugging

You can collect calls and responses and dump them to the screen or file. To do this, configure `GetresponseClient` and get `Debugger` by using a proper factory `GetresponseClientFactory::createDebugger($getresponseClient)`. Note: this factory will attach `DebugLogger`, disconnecting the previous logger. The logger will collect requests, responses, calculate metrics (how long request lasted), and count errors.

To retrieve the debug information, you have to call `dump` or `dumpToFile` functions (of `Debugger` class).

## Example of debug initialization and dumping

```php
<?php

use Getresponse\Sdk\GetresponseClientFactory;

// initialize the client
$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$debugger = GetresponseClientFactory::createDebugger($client);

// do some API calls here
// $client->call(...);

$debugger->dump(); // to output
$debugger->dumpToFile('/tmp/my_debug_file.txt');

```

**Please note that the debug output may contain sensitive data.**

Once you start the debugger, you overwrite the Logger configuration by `DebugLogger`. So, you might have to restore your configuration using the `setLogger()` function again.


## Example debugging

```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContacts;
use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsFields;

$getContactsOperation = new GetContacts();
$getContactsOperation->setFields(
    new GetContactsFields(
        'name',
        'email',
        'origin'
    )
);

$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$debugger = GetresponseClientFactory::createDebugger($client);

$response = $client->call($getContactsOperation);

// echo the dump
$debugger->dump();

// save to file
$debugger->dumpToFile('get_contacts.log');
```

Log content:

```
--------- CALLS ---------
    1. GET: /v3/contacts?fields=email,name,origin
        URL: https://api.getresponse.com
        Authorization: api-key my_api_key
        Time: 11:56:29
        Protocol Version: 1.1
        Request size: 313
        Request time: 446 ms
        Connect time: 134 ms
        Request Headers:
            host: api.getresponse.com
            user-agent: GetResponse-SDK/2.0.0 GetResponse-API/3.0 GetResponse-Client/1.1.0 CurlRequestHandler (cURL 7.54.0; PHP 7.1.14; Darwin; cli)
            x-auth-token: api-key my_api_key
        Request Body:
            [EMPTY]
        Total time: 580 ms
        Size download: 374
        Speed download: 645
        Result: 200 OK
        Response Headers:
            Server: nginx
            Date: Mon, 16 Apr 2018 11:56:29 GMT
            Content-Type: application/json
            Transfer-Encoding: chunked
            TotalCount: 2
            TotalPages: 1
            CurrentPage: 1
            X-RateLimit-Limit: 30000
            X-RateLimit-Remaining: 29997
            X-RateLimit-Reset: 267 seconds
        Response Body:
        [
            {
                "contactId": "wqLU7Q",
                "name": "Jack The Example",
                "email": "jackexample@example.com",
                "origin": "panel"
            },
            {
                "contactId": "wqLUoY",
                "name": "Jill The Example",
                "email": "jillexample@example.com",
                "origin": "panel"
            }
        ]
--------- SUMMARY ---------
    Date: Mon, 16 Apr 2018 11:56:29 +0000
    Total time: 579 ms
    Calls: 1
    Errors count: 0
--------- ENV ---------
    PHP Version: 7.1.14
    SAPI: cli
    xdebug: yes
    curl: yes
```

## Custom output handling

You can define your `Formatter` and `DebugDumper` classes to send debugs to systems like Elasticsearch or Sentry.

* the custom `Formatter` should implement `Formatter interface` with the function: `format(array $data)` - you can convert the collected data to any format you need. We supply `LineFormatter`, which gives you the plain text with intends in the results.
* the custom `Dumper` should implement the `DebugDumper interface` with the function `dump($debug)` - you can implement your own class which sends `$debug` to any output you wish. We supply `DisplayDebugDumper` and `FileDebugDumper`. 

**Please note that the dumped content may contain sensitive data.**

___

[Back](../../README.md)
