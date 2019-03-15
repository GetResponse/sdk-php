<?php

use Getresponse\Sdk\GetresponseClientFactory;
use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContacts;
use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsSearchQuery;
use Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsSortParams;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Create GetResponse client with URL defined in Getresponse\Sdk\Environment\GetResponse
 * and API_KEY from environment variable
 *
 */
$client = GetresponseClientFactory::createWithApiKey(getenv('API_KEY'));

$getContactsOperation = new GetContacts();

/**
 * lets define search query
 */
$searchQuery = new GetContactsSearchQuery();
$searchQuery->whereName('example');
$getContactsOperation->setQuery($searchQuery);

/**
 * some sorting would be useful?
 */
$sort = new GetContactsSortParams();
$sort->sortAscBy('createdOn');

$result = $client->call($getContactsOperation);

var_dump($result->getData());