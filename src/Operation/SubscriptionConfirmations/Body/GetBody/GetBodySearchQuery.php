<?php
namespace Getresponse\Sdk\Operation\SubscriptionConfirmations\Body\GetBody;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetBodySearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
        ];
    }
}
