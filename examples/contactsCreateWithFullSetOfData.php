<?php

use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Campaigns\GetCampaigns\GetCampaigns;
use Getresponse\Sdk\Operation\Contacts\CreateContact\CreateContact;
use Getresponse\Sdk\Operation\CustomFields\GetCustomFields\GetCustomFields;
use Getresponse\Sdk\Operation\CustomFields\GetCustomFields\GetCustomFieldsSearchQuery;
use Getresponse\Sdk\Operation\Model\CampaignReference;
use Getresponse\Sdk\Operation\Model\NewContact;
use Getresponse\Sdk\Operation\Model\NewContactCustomFieldValue;
use Getresponse\Sdk\Operation\Model\NewContactTag;
use Getresponse\Sdk\Operation\Tags\GetTags\GetTags;
use Getresponse\Sdk\Operation\Tags\GetTags\GetTagsSearchQuery;

require_once __DIR__ . '/../vendor/autoload.php';

/*
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API Key from API_KEY environment variable
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));

/*
 * Get list of campaigns and pick the first one
 *
 * *NOTE*: You should not repeatedly ask for list of campaigns and instead cache the campaign ID or save it in your config.
 *         IDs are guaranteed to be constant, so there is no risk of them changing for a campaign
 */
$getCampaignsOperation = new GetCampaigns();
$getCampaignsResponse = $client->call($getCampaignsOperation);

if ($getCampaignsResponse->isSuccess()) {
    $campaignList = $getCampaignsResponse->getData();
    $campaign = $campaignList[0];
} else {
    throw new RuntimeException('Failed getting campaigns');
}

/*
 * Find `country` custom field ID
 *
 * *NOTE*: You should not repeatedly ask for list of custom fields and instead cache the IDs or save them in your config.
 *         IDs are guaranteed to be constant, so there is no risk of it changing for a custom field
 */
$getCustomFieldsOperation = new GetCustomFields();
$getCustomFieldsQuery = new GetCustomFieldsSearchQuery();
$getCustomFieldsQuery->whereName('country');
$getCustomFieldsOperation->setQuery($getCustomFieldsQuery);
$getCustomFieldsResponse = $client->call($getCustomFieldsOperation);

if ($getCampaignsResponse->isSuccess() && count($getCustomFieldsResponse->getData()) > 0) {
    $customFieldList = $getCustomFieldsResponse->getData();
    $customField = $customFieldList[0];
} else {
    // request failed or custom field does not exist
    throw new RuntimeException('Failed getting custom field');
}

/*
 * Find `vip_customer` tag ID
 *
 * *NOTE*: You should not repeatedly ask for list of tags and instead cache the IDs or save them in your config.
 *         IDs are guaranteed to be constant, so there is no risk of it changing for a custom field
 */
$getTagsOperation = new GetTags();
$getTagsQuery = new GetTagsSearchQuery();
$getTagsQuery->whereName('vip_customer');
$getTagsOperation->setQuery($getTagsQuery);
$getTagsResponse = $client->call($getTagsOperation);

if ($getTagsResponse->isSuccess() && count($getTagsResponse->getData()) > 0) {
    $tagsList = $getTagsResponse->getData();
    $tag = $tagsList[0];
} else {
    // request failed or tag does not exist
    throw new RuntimeException('Failed getting tags');
}

/*
 * Required fields are set via constructor
 */
$newContact = new NewContact(
    new CampaignReference($campaign['campaignId']),
    /*
     * *NOTE*: emails from `example.com` domain may be rejected, replace with an actual address
     */
    'test' . uniqid() . '@example.com'
);

/*
 * `customFieldValues` - array of objects with ID and value of the custom field for the contact,
 *                       you can send multiple different custom fields for a single contact, just add them to the array
 */
$newContact->setCustomFieldValues(
    [
        new NewContactCustomFieldValue(
            $customField['customFieldId'],
            /*
             * Pick random value as an example
             */
            [$customField['values'][array_rand($customField['values'])]]
        )
    ]
);
/*
 * `tags` - array of objects with tag's ID,
 *          you can send multiple tags for a single contact, just add them to the array
 */
$newContact->setTags(
    [
        new NewContactTag($tag['tagId'])
    ]
);
$newContact->setDayOfCycle('10');
/*
 * contacts with IP from private networks may be rejected, replace with an actual address
 */
$newContact->setIpAddress('192.168.0.1');
$newContact->setName('John Doe');
$newContact->setScoring(15);

$createContact = new CreateContact($newContact);

/*
 * *NOTE*: Test data provided in the example is not guaranteed to be accepted, in which case,
 *         API response will tell you which fields need to be corrected
 */
$createContactResponse = $client->call($createContact);
var_dump($createContactResponse);
