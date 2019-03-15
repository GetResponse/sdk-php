<?php

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContacts;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API_KEY from environment variable
 *
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));


$getContactsOperation1 = new GetContacts();
$getContactsOperation1->setPagination(new Pagination(1, 1));

$getContactsOperation2 = new GetContacts();
$getContactsOperation2->setPagination(new Pagination(2, 1));

/**
 * we will get much additional info - for development purposes only!
 */
$debugger = GetresponseClientFactory::createDebugger($client);

$operationCollection = $client->callMany([$getContactsOperation1, $getContactsOperation2]);

// display dump
$debugger->dump();