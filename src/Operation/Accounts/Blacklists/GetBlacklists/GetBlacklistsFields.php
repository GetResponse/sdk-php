<?php
namespace Getresponse\Sdk\Operation\Accounts\Blacklists\GetBlacklists;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetBlacklistsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'masks',
        ];
    }
}
