<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTaxes extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/taxes';

    /** @var string */
    private $shopId;

    /** @var GetTaxesSearchQuery */
    private $query;

    /** @var GetTaxesSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetTaxesFields */
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
     * @param GetTaxesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetTaxesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetTaxesSortParams $sort
     * @return $this
     */
    public function setSort(GetTaxesSortParams $sort)
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
     * @param GetTaxesFields $fields
     * @return $this
     */
    public function setFields(GetTaxesFields $fields)
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
