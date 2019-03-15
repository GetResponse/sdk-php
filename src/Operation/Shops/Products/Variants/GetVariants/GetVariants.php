<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetVariants extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/products/{productId}/variants';

    /** @var string */
    private $shopId;

    /** @var string */
    private $productId;

    /** @var GetVariantsSearchQuery */
    private $query;

    /** @var GetVariantsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetVariantsFields */
    private $fields;


    /**
     * @param string $shopId
     * @param string $productId
     */
    public function __construct($shopId, $productId)
    {
        $this->shopId = $shopId;
        $this->productId = $productId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{productId}'],
            [$this->shopId, $this->productId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetVariantsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetVariantsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetVariantsSortParams $sort
     * @return $this
     */
    public function setSort(GetVariantsSortParams $sort)
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
     * @param GetVariantsFields $fields
     * @return $this
     */
    public function setFields(GetVariantsFields $fields)
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
