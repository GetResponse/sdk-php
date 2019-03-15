<?php
namespace Getresponse\Sdk\Operation\Forms\GetForms;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetForms extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/forms';

    /** @var GetFormsSearchQuery */
    private $query;

    /** @var GetFormsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetFormsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetFormsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetFormsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetFormsSortParams $sort
     * @return $this
     */
    public function setSort(GetFormsSortParams $sort)
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
     * @param GetFormsFields $fields
     * @return $this
     */
    public function setFields(GetFormsFields $fields)
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
