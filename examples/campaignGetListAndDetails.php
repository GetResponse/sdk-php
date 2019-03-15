<?php

use Getresponse\Sdk\Client\Exception\MalformedResponseDataException;
use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Campaigns\GetCampaign\GetCampaign;
use Getresponse\Sdk\Operation\Campaigns\GetCampaigns\GetCampaigns;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API_KEY from environment variable
 *
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));

/**
 * How to get list of campaigns
 */
$campaignsOperation = new GetCampaigns();

/**
 * There could be pagination, so we have to send requests for each page.
 */
$pageNumber = 1;
$finalPage = 1;
$campaignsArray = array();

do {
    $campaignsOperation->setPagination(new Pagination($pageNumber, 10));

    $response = $client->call($campaignsOperation);

    if ($response->isSuccess()) {
        /**
         * note: as operations are asynchronous, pagination data could change during the execution
         * of this code, so os better to adjust finalPage every call.
         */
        if ($response->isPaginated()) {
            $paginationValues = $response->getPaginationValues();
            $finalPage = $paginationValues->getTotalPages();
        }
        $campaignList = $response->getData();
        foreach ($campaignList as $campaign) {
            $campaignsArray[] = $campaign;
            var_dump($campaign);
        }
        $pageNumber++;
    } else {
        /**
         * put some error handling here
         */
        $errorData = $response->getData();
        var_dump($errorData['message']);
        break;
    }

} while ($pageNumber <= $finalPage);

/**
 * We can also get details of single campaign
 */

if (isset($campaignsArray[0])) {
    /**
     * Just to obtain campaignId
     * Of course when we know the campaignId we do not have to get campaigns list
     */
    $singleCampaignObject = $campaignsArray[0];
    $campaignId = $singleCampaignObject['campaignId'];

    /**
     * Just get single campaign details
     */
    $singleCampaignOperation = new GetCampaign($campaignId);
    $response = $client->call($singleCampaignOperation);

    /**
     * you can handle possible error to avoid propagation of exception
     */
    try {
        var_dump($response->getData());
    } catch (MalformedResponseDataException $e) {
        /**
         * implement error handling here
         */
    }
}