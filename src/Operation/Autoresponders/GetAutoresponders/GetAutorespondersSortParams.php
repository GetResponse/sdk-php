<?php
namespace Getresponse\Sdk\Operation\Autoresponders\GetAutoresponders;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetAutorespondersSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'subject',
            'dayOfCycle',
            'delivered',
            'openRate',
            'clickRate',
            'createdOn',
        ];
    }
}
