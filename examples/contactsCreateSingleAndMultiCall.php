<?php

use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Campaigns\GetCampaigns\GetCampaigns;
use Getresponse\Sdk\Operation\Contacts\CreateContact\CreateContact;
use Getresponse\Sdk\Operation\Model\CampaignReference;
use Getresponse\Sdk\Operation\Model\NewContact;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API_KEY from environment variable
 *
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));

/**
 * let search for campaign. f.e. the first one we could find
 */
$campaignsOperation = new GetCampaigns();
$response = $client->call($campaignsOperation);

if ($response->isSuccess()) {
    $campaignList = $response->getData();
    $campaign = $campaignList[0];


    /**
     * first lets try to add single contact
     */
    $newContact = new NewContact(
        new CampaignReference($campaign['campaignId']),
        'test' . uniqid() . '@example.com'
    );

    $createContact = new CreateContact($newContact);

    /**
     * warning, you WILL get 400 error for example.com domain. Check with addresses from your collection.
     */
    $response = $client->call($createContact);
    var_dump($response);
    /**
     * note the error handling is omitted, please implement any
     */

    /**
     * now lets try to create multiple contacts using callMany to make the request simultaneously
     * (warning, throttling limits apply)
     */

    /**
     * first we have to create an array with operations
     */
    $contactsArray = [];
    for ($x = 1; $x <= 3; $x++) {
        $contactsArray[] = new CreateContact(
            new NewContact(
                new CampaignReference($campaign['campaignId']),
                'test' . uniqid() . '@example.com'
            )
        );
    }
    $responses = $client->callMany($contactsArray);

    /**
     * the responses will be collection of responses in the same order, as requests in contactsArray
     */
    foreach ($responses as $response) {
        var_dump($response);
    }
}

