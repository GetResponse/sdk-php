<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvents;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetCustomEventsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
        ];
    }
}
