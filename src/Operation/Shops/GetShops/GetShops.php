<?php
namespace Getresponse\Sdk\Operation\Shops\GetShops;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetShops extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops';

    /** @var GetShopsSearchQuery */
    private $query;

    /** @var GetShopsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetShopsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetShopsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetShopsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetShopsSortParams $sort
     * @return $this
     */
    public function setSort(GetShopsSortParams $sort)
    {
        $this->sort = $sort;
        return $this;
    }


    /**
     * @param Pagination $pagination
     * @return $this
     */
    public function setPagination(Pagination $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }


    /**
     * @param GetShopsFields $fields
     * @return $this
     */
    public function setFields(GetShopsFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getPaginationParametersArray($this->pagination),
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
