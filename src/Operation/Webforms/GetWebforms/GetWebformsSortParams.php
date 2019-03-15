<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebforms;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetWebformsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'modifiedOn',
        ];
    }
}
