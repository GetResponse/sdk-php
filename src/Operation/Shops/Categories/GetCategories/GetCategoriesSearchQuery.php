<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategories;

use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetCategoriesSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'parentId',
            'externalId',
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
     * @param string $parentId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereParentId($parentId)
    {
        return $this->set('parentId', $parentId);
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
}
