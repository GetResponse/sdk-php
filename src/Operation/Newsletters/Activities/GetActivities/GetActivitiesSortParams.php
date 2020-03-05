<?php
namespace Getresponse\Sdk\Operation\Newsletters\Activities\GetActivities;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetActivitiesSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
        ];
    }
}
