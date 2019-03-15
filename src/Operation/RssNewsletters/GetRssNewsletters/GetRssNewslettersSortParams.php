<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetRssNewslettersSortParams extends SortParams
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
