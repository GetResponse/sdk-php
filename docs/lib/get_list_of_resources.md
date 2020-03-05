# Getting lists of resources

## Get data

Example code for getting the list of contacts:

```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContacts;
use Getresponse\Sdk\GetresponseClientFactory;

$getContactsOperation = new GetContacts();
$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$response = $client->call($getContactsOperation);

// getData returns decoded data as an array
$data = $response->getData();

echo json_encode($data, JSON_PRETTY_PRINT);
```

Output:

```json
    [
        {
            "contactId": "aad",
            "href": "https://getresponse.com/v3/contacts/aad",
            "name": "John Smith",
            "email": "john.smith@example.com",
            "note": null,
            "origin": "api",
            "dayOfCycle": null,
            "changedOn": "2018-02-22T13:33:42+0000",
            "timeZone": "Europe/Warsaw",
            "ipAddress": null,
            "activities": "https://getresponse.com/v3/contacts/aad/activities",
            "campaign": {
                "campaignId": "cdd",
                "href": "https://getresponse.com/v3/campaigns/cdd",
                "name": "campaigns_name"
            },
            "createdOn": "2018-02-22T13:33:00+0000",
            "scoring": 100
        }
    ]
```

## Pagination

You can set the pagination parameters:

```php
<?php

use Getresponse\Sdk\Client\Operation\Pagination;

$initialPage = 2; // get the second page
$perPage = 5; // objects per page

$getContactsOperation->setPagination(new Pagination($initialPage, $perPage));

```

To get the pagination info from a response:

```php
<?php

if ($response->isPaginated()) {
    $paginationValues = $response->getPaginationValues();

    var_dump($paginationValues->getTotalPages());
    var_dump($paginationValues->getTotalCount());
    var_dump($paginationValues->getPage());
}

```


## Filter results

You can choose a list of fields you will get in the API response. Use the `setFields` method of operation:

```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsFields;

$getContactsOperation->setFields(
    new GetContactsFields(
        'email',
        'campaign',
        'name',
        'ipAddress'
    )
);

```

## Search

To search a resource by any available field, classes with all the allowed search fields are prepared.


```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsSearchQuery;

$searchQuery = (new GetContactsSearchQuery())
    ->whereEmail('john.smith@example.com')
    ->whereOriginIsApi();

$getContactsOperation->setQuery($searchQuery);
```

This code evaluates to the URL:

    /v3/contacts?query[email]=john.smith@example.com&query[origin]=api

## List sorting

```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsSortParams;

$sortParams = (new GetContactsSortParams())
    ->sortDescBy('createdOn');

$getContactsOperation->setSort($sortParams);
```

This code evaluates to the URL:

    /v3/contacts?sort[createdOn]=desc

___

[Back](../../README.md)
