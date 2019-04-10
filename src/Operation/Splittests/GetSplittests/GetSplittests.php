<?php
namespace Getresponse\Sdk\Operation\Splittests\GetSplittests;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSplittests extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/splittests';

    /** @var GetSplittestsSearchQuery */
    private $query;

    /** @var GetSplittestsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetSplittestsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetSplittestsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetSplittestsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetSplittestsSortParams $sort
     * @return $this
     */
    public function setSort(GetSplittestsSortParams $sort)
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
     * @param GetSplittestsFields $fields
     * @return $this
     */
    public function setFields(GetSplittestsFields $fields)
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
