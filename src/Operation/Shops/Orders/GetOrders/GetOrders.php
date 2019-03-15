<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\GetOrders;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetOrders extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/orders';

    /** @var string */
    private $shopId;

    /** @var GetOrdersSearchQuery */
    private $query;

    /** @var GetOrdersSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetOrdersFields */
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
     * @param GetOrdersSearchQuery $query
     * @return $this
     */
    public function setQuery(GetOrdersSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetOrdersSortParams $sort
     * @return $this
     */
    public function setSort(GetOrdersSortParams $sort)
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
     * @param GetOrdersFields $fields
     * @return $this
     */
    public function setFields(GetOrdersFields $fields)
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
