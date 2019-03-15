<?php
namespace Getresponse\Sdk\Operation\Forms\GetForms;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetFormsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
            'name',
            'visitors',
            'uniqueVisitors',
            'subscribed',
            'subscriptionRate',
        ];
    }
}
