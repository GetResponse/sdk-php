<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTracks;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetClickTracksSearchQuery extends SearchQuery
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


    /**
     * @param DateRangeSearch $createdOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCreatedOn(DateRangeSearch $createdOn)
    {
        return $this->set('createdOn', $createdOn->toArray());
    }
}
