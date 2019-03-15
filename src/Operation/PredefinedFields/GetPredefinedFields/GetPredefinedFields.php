<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetPredefinedFields extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/predefined-fields';

    /** @var GetPredefinedFieldsSearchQuery */
    private $query;

    /** @var GetPredefinedFieldsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetPredefinedFieldsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetPredefinedFieldsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetPredefinedFieldsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetPredefinedFieldsSortParams $sort
     * @return $this
     */
    public function setSort(GetPredefinedFieldsSortParams $sort)
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
     * @param GetPredefinedFieldsFields $fields
     * @return $this
     */
    public function setFields(GetPredefinedFieldsFields $fields)
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
