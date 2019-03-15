<?php
namespace Getresponse\Sdk\Operation\Shops\Products\GetProducts;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetProductsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
            'vendor',
            'category',
            'categoryId',
            'externalId',
            'variantName',
            'metaFieldNames',
            'metaFieldValues',
            'createdOn',
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
     * @param string $vendor
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereVendor($vendor)
    {
        return $this->set('vendor', $vendor);
    }


    /**
     * @param string $category
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCategory($category)
    {
        return $this->set('category', $category);
    }


    /**
     * @param string $categoryId
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereCategoryId($categoryId)
    {
        return $this->set('categoryId', $categoryId);
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
     * @param string $variantName
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereVariantName($variantName)
    {
        return $this->set('variantName', $variantName);
    }


    /**
     * @param string $metaFieldNames
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereMetaFieldNames($metaFieldNames)
    {
        return $this->set('metaFieldNames', $metaFieldNames);
    }


    /**
     * @param string $metaFieldValues
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function whereMetaFieldValues($metaFieldValues)
    {
        return $this->set('metaFieldValues', $metaFieldValues);
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
