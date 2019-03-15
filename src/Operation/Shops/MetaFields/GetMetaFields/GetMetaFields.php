<?php
namespace Getresponse\Sdk\Operation\Shops\MetaFields\GetMetaFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetMetaFields extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/meta-fields';

    /** @var string */
    private $shopId;

    /** @var GetMetaFieldsSearchQuery */
    private $query;

    /** @var GetMetaFieldsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetMetaFieldsFields */
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
     * @param GetMetaFieldsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetMetaFieldsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetMetaFieldsSortParams $sort
     * @return $this
     */
    public function setSort(GetMetaFieldsSortParams $sort)
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
     * @param GetMetaFieldsFields $fields
     * @return $this
     */
    public function setFields(GetMetaFieldsFields $fields)
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
