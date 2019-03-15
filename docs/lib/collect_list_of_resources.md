# Getting lists of resources

## Get data

Example code

```php

use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContacts;
use Getresponse\Sdk\GetresponseClientFactory;

$getContactsOperation = new GetContacts();
$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$response = $client->call($getContactsOperation);
$data = $response->getData();

print $data;
```
Output:

```json
    [
        {
            "contactId": "aad",
            "href": "https://getresponse.com/v3/contacts/aad",
            "name": "Adam Foo",
            "email": "adam.foo@email.com",
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

$initialPage = 2; //start from the second page
$perPage = 5; //objects per page

$campaignsOperation->setPagination(new Pagination($initialPage, $perPage));

```

To get the pagination info from a response:

```php

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

$campaignsOperation->setFields(
    'description',
    'campaignId',
    'name'
);

```

## Search

To search a resource by any available field, classes with all the allowed search fields are prepared.


```php
$searchQuery = (new GetContactsSearchQuery())
    ->withEmail('adam.foo@email.com')
    ->withOrigin('api');

$getContactsOperation->setQuery($searchQuery);
```

This code evaluates the URL:

    /v3/contacts?query[email]=adam.foo@email.com&query[origin]=api

## List sorting

```php
$sortParams = (new GetContactsSortParams())
    ->sortDescBy('createdAt');

$getContactsOperation->setSort($sortParams);
```

This code evaluates the URL:

    /v3/contacts?sort[createdAt]=desc

___

[Back](../../README.md)
