# Creating resources

Example code

```php

use Getresponse\Sdk\Operation\Model\NewContact;
use Getresponse\Sdk\Operation\Model\ResourceCampaign;
use Getresponse\Sdk\Operation\Contacts\CreateContact\CreateContact;
use Getresponse\Sdk\GetresponseClientFactory;

$createContact = new NewContact(
    new ResourceCampaign('cdd'),
    'adam.foo@email.com'
);

$createContactOperation = new CreateContact();
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
