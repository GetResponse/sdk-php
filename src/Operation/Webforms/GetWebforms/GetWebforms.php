<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebforms;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetWebforms extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/webforms';

    /** @var GetWebformsSearchQuery */
    private $query;

    /** @var GetWebformsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetWebformsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetWebformsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetWebformsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetWebformsSortParams $sort
     * @return $this
     */
    public function setSort(GetWebformsSortParams $sort)
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
     * @param GetWebformsFields $fields
     * @return $this
     */
    public function setFields(GetWebformsFields $fields)
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
