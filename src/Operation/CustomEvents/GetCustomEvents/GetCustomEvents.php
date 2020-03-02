<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvents;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCustomEvents extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-events';

    /** @var GetCustomEventsSearchQuery */
    private $query;

    /** @var GetCustomEventsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetCustomEventsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetCustomEventsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetCustomEventsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetCustomEventsSortParams $sort
     * @return $this
     */
    public function setSort(GetCustomEventsSortParams $sort)
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
     * @param GetCustomEventsFields $fields
     * @return $this
     */
    public function setFields(GetCustomEventsFields $fields)
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
