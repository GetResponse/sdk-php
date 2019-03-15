<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetVariantsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'sku',
            'description',
            'externalId',
            'createdAt',
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


    /**
     * @param string $sku
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereSku($sku)
    {
        return $this->set('sku', $sku);
    }


    /**
     * @param string $description
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereDescription($description)
    {
        return $this->set('description', $description);
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
     * @param DateRangeSearch $createdAt
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCreatedAt(DateRangeSearch $createdAt)
    {
        return $this->set('createdAt', $createdAt->toArray());
    }
}
