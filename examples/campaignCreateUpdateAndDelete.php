<?php

use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Campaigns\CreateCampaign\CreateCampaign;
use Getresponse\Sdk\Operation\Campaigns\UpdateCampaign\UpdateCampaign as UpdateCampaignOperation;
use Getresponse\Sdk\Operation\Model\CampaignOptinTypes;
use Getresponse\Sdk\Operation\Model\CampaignProfile;
use Getresponse\Sdk\Operation\Model\NewCampaign;
use Getresponse\Sdk\Operation\Model\UpdateCampaign;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API_KEY from environment variable
 *
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));

$newCampaign = new NewCampaign('tmp_campaign');

$optInModel = new CampaignOptinTypes();
$optInModel->setApi('single');
$newCampaign->setOptinTypes($optInModel);

$profileModel = new CampaignProfile();
$profileModel->setDescription('Description of my campaign');
$newCampaign->setProfile($profileModel);

$createCampaignOperation = new CreateCampaign($newCampaign);

$response = $client->call($createCampaignOperation);

if ($response->isSuccess()) {
    $campaign = $response->getData();
    var_dump($campaign);

    /**
     * And now lets update campaign data
     */
    $campaignId = $campaign['campaignId'];
    $campaignName = $campaign['name'];

    $updateCampaignModel = new UpdateCampaign($campaignName);

    $optInModel->setApi('double');
    $updateCampaignModel->setOptinTypes($optInModel);

    $updateCampaignOperation = new UpdateCampaignOperation($updateCampaignModel, $campaignId);
    $response = $client->call($updateCampaignOperation);

    if ($response->isSuccess()) {
        $updatedCampaign = $response->getData();
        var_dump($updatedCampaign);
    } else {
        /**
         * put some error handling here
         */
        $errorData = $response->getData();
        var_dump($errorData['message']);
    }

} else {
    /**
     * put your own error handling here
     */
    $errorData = $response->getData();
    var_dump($errorData['message']);
}