<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinars;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetWebinarsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'createdOn',
            'startsOn',
        ];
    }
}
