<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFromFields extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/from-fields';

    /** @var GetFromFieldsSearchQuery */
    private $query;

    /** @var GetFromFieldsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetFromFieldsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetFromFieldsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetFromFieldsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetFromFieldsSortParams $sort
     * @return $this
     */
    public function setSort(GetFromFieldsSortParams $sort)
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
     * @param GetFromFieldsFields $fields
     * @return $this
     */
    public function setFields(GetFromFieldsFields $fields)
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
