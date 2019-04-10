<?php
namespace Getresponse\Sdk\Operation\Webinars\GetWebinars;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetWebinars extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/webinars';

    /** @var GetWebinarsSearchQuery */
    private $query;

    /** @var GetWebinarsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetWebinarsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetWebinarsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetWebinarsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetWebinarsSortParams $sort
     * @return $this
     */
    public function setSort(GetWebinarsSortParams $sort)
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
     * @param GetWebinarsFields $fields
     * @return $this
     */
    public function setFields(GetWebinarsFields $fields)
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
