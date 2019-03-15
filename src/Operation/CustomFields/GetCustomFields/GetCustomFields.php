<?php
namespace Getresponse\Sdk\Operation\CustomFields\GetCustomFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCustomFields extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-fields';

    /** @var GetCustomFieldsSearchQuery */
    private $query;

    /** @var GetCustomFieldsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetCustomFieldsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetCustomFieldsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetCustomFieldsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetCustomFieldsSortParams $sort
     * @return $this
     */
    public function setSort(GetCustomFieldsSortParams $sort)
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
     * @param GetCustomFieldsFields $fields
     * @return $this
     */
    public function setFields(GetCustomFieldsFields $fields)
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
