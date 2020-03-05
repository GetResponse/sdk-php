# Getting single resource

Example code for getting a single contact details by ID

```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContact\GetContact;
use Getresponse\Sdk\GetresponseClientFactory;

$contactId = 'aad';

$getContactDetailsOperation = new GetContact($contactId);
$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$response = $client->call($getContactDetailsOperation);
$data = $response->getData();

print $data;
```

Output:

```json
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
        "geolocation": {
           "latitude": "54.4047",
           "longitude": "18.5787",
           "continentCode": "EU",
           "countryCode": "PL",
           "region": "PM",
           "postalCode": "80-387",
           "dmaCode": null,
           "city": "Gdańsk"
        },
        "tags": [],
        "customFieldValues": [
           {
               "customFieldId": "4jljN",
               "name": "age",
               "value": [
                   "30-44"
               ],
               "values": [
                   "30-44"
               ],
               "type": "single_select",
               "fieldType": "single_select",
               "valueType": "string"
           }
        ],
        "scoring": 100
    }
```

## Filter results

You can choose a list of fields to get in the API response. Use the `setFields` method of operation:

```php
<?php

use Getresponse\Sdk\Operation\Contacts\GetContact\GetContactFields;

$getContactDetailsOperation->setFields(
    new GetContactFields(
        'email',
        'campaign',
        'name'
    )
);

```

___

[Back](../../README.md)
