<?php
namespace Getresponse\Sdk\Operation\Shops\Products\GetProducts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetProducts extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/products';

    /** @var string */
    private $shopId;

    /** @var GetProductsSearchQuery */
    private $query;

    /** @var GetProductsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetProductsFields */
    private $fields;


    /**
     * @param string $shopId
     */
    public function __construct($shopId)
    {
        $this->shopId = $shopId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}'],
            [$this->shopId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetProductsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetProductsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetProductsSortParams $sort
     * @return $this
     */
    public function setSort(GetProductsSortParams $sort)
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
     * @param GetProductsFields $fields
     * @return $this
     */
    public function setFields(GetProductsFields $fields)
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
