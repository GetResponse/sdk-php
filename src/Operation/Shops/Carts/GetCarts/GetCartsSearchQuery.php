<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\GetCarts;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetCartsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'externalId',
            'createdOn',
        ];
    }


    /**
     * @param string $externalId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereExternalId($externalId)
    {
        return $this->set('externalId', $externalId);
    }


    /**
     * @param DateRangeSearch $createdOn
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCreatedOn(DateRangeSearch $createdOn)
    {
        return $this->set('createdOn', $createdOn->toArray());
    }
}
