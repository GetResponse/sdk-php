<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletters;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetNewslettersSortParams extends SortParams
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
