<?php
namespace Getresponse\Sdk\Operation\Imports\GetImports;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetImports extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/imports';

    /** @var GetImportsSearchQuery */
    private $query;

    /** @var GetImportsSortParams */
    private $sort;

    /** @var GetImportsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetImportsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetImportsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetImportsSortParams $sort
     * @return $this
     */
    public function setSort(GetImportsSortParams $sort)
    {
        $this->sort = $sort;
        return $this;
    }


    /**
     * @param GetImportsFields $fields
     * @return $this
     */
    public function setFields(GetImportsFields $fields)
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
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
