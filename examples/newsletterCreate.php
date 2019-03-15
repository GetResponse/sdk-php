<?php

use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Model\CampaignReference;
use Getresponse\Sdk\Operation\Model\FromFieldReference;
use Getresponse\Sdk\Operation\Model\MessageContent;
use Getresponse\Sdk\Operation\Model\NewNewsletter;
use Getresponse\Sdk\Operation\Model\NewsletterSendSettings;
use Getresponse\Sdk\Operation\Newsletters\CreateNewsletter\CreateNewsletter;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API_KEY from environment variable
 *
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));

$createNewsletterContent = new MessageContent();
$createNewsletterContent->setPlain(uniqid('APIv3 PHP SDK test content - ', true));


/**
 * note the IDs are example only. You should use your own - obtained from our API or
 * from your local storage.
 * Please avoid unnecessary API calls. For example get a list of FromFields once and store
 * or cache in your system. Repeating unnecessary API calls can lead to additional restrictions and limits.
 */
$createNewsletterSendSettings = new NewsletterSendSettings();
$createNewsletterSendSettings->setSelectedContacts(array('exampleContactID'));

$createNewsletter = new NewNewsletter(
    uniqid('APIv3 PHP SDK test - ', true),
    new FromFieldReference('exampleFFRid'),
    new CampaignReference('exampleCRid'),
    $createNewsletterContent,
    $createNewsletterSendSettings
);
$createNewsletterOperation = new CreateNewsletter($createNewsletter);

var_dump(
    $createNewsletterOperation->getMethod(),
    $createNewsletterOperation->getUrl(),
    $createNewsletterOperation->getBody()
);

$response = $client->call($createNewsletterOperation);

var_dump($response);
