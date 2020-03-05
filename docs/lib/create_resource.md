# Creating resources

Example code for adding a contact:

```php
<?php

use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Contacts\CreateContact\CreateContact;
use Getresponse\Sdk\Operation\Model\CampaignReference;
use Getresponse\Sdk\Operation\Model\NewContact;

$createContact = new NewContact(
    new CampaignReference('cdd'),
    'adam.foo@email.com'
);

$createContactOperation = new CreateContact($createContact);
$client = GetresponseClientFactory::createWithApiKey('my_api_key');
$response = $client->call($createContactOperation);

if ($response->isSuccess()) {
    print 'OK';
}
```

Output:

```plain
OK
```

___

[Back](../../README.md)
