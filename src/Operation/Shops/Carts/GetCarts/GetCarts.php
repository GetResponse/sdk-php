<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\GetCarts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCarts extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/carts';

    /** @var string */
    private $shopId;

    /** @var GetCartsSearchQuery */
    private $query;

    /** @var GetCartsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetCartsFields */
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
     * @param GetCartsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetCartsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetCartsSortParams $sort
     * @return $this
     */
    public function setSort(GetCartsSortParams $sort)
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
     * @param GetCartsFields $fields
     * @return $this
     */
    public function setFields(GetCartsFields $fields)
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
