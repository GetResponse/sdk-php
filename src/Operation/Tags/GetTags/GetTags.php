<?php
namespace Getresponse\Sdk\Operation\Tags\GetTags;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTags extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/tags';

    /** @var GetTagsSearchQuery */
    private $query;

    /** @var GetTagsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetTagsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetTagsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetTagsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetTagsSortParams $sort
     * @return $this
     */
    public function setSort(GetTagsSortParams $sort)
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
     * @param GetTagsFields $fields
     * @return $this
     */
    public function setFields(GetTagsFields $fields)
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
