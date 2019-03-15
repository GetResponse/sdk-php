<?php
namespace Getresponse\Sdk\Operation\Shops\Categories\GetCategories;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCategories extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/categories';

    /** @var string */
    private $shopId;

    /** @var GetCategoriesSearchQuery */
    private $query;

    /** @var GetCategoriesSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetCategoriesFields */
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
     * @param GetCategoriesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetCategoriesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetCategoriesSortParams $sort
     * @return $this
     */
    public function setSort(GetCategoriesSortParams $sort)
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
     * @param GetCategoriesFields $fields
     * @return $this
     */
    public function setFields(GetCategoriesFields $fields)
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
