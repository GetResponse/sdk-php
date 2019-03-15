<?php
namespace Getresponse\Sdk\Operation\Suppressions\GetSuppressions;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSuppressions extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/suppressions';

    /** @var GetSuppressionsSearchQuery */
    private $query;

    /** @var GetSuppressionsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetSuppressionsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetSuppressionsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetSuppressionsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetSuppressionsSortParams $sort
     * @return $this
     */
    public function setSort(GetSuppressionsSortParams $sort)
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
     * @param GetSuppressionsFields $fields
     * @return $this
     */
    public function setFields(GetSuppressionsFields $fields)
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
