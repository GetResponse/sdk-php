<?php
namespace Getresponse\Sdk\Operation\Accounts\Blacklists\GetBlacklists;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetBlacklistsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'mask',
        ];
    }


    /**
     * @param string $mask
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereMask($mask)
    {
        return $this->set('mask', $mask);
    }
}
