<?php
namespace Getresponse\Sdk\Operation\Accounts\Badge\GetBadge;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetBadgeFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'status',
        ];
    }
}
