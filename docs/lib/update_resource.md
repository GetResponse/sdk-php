# Updating resources

Example code for updating a name of a contact:

```php
<?php

use Getresponse\Sdk\Operation\Model;
use Getresponse\Sdk\Operation\Contacts\UpdateContact\UpdateContact;
use Getresponse\Sdk\GetresponseClientFactory;

$updateContact = new Model\UpdateContact();
$updateContact->setName('New name');

$updateContactOperation = new UpdateContact($updateContact, 'aad');
$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$response = $client->call($updateContactOperation);

print $response->getData();
```

Output:

```json
    {
        "contactId": "aad",
        "href": "https://getresponse.com/v3/contacts/aad",
        "name": "New name",
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

___

[Back](../../README.md)
