<?php
namespace Getresponse\Sdk\Operation\Shops\GetShops;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetShopsSearchQuery extends SearchQuery
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


    /**
     * @param string $name
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereName($name)
    {
        return $this->set('name', $name);
    }
}
