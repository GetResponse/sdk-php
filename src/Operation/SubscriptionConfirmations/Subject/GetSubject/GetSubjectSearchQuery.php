<?php
namespace Getresponse\Sdk\Operation\SubscriptionConfirmations\Subject\GetSubject;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetSubjectSearchQuery extends SearchQuery
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
