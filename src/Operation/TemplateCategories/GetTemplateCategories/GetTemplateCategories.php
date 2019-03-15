<?php
namespace Getresponse\Sdk\Operation\TemplateCategories\GetTemplateCategories;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTemplateCategories extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/template-categories';

    /** @var GetTemplateCategoriesSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetTemplateCategoriesFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetTemplateCategoriesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetTemplateCategoriesSearchQuery $query)
    {
        $this->query = $query;
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
     * @param GetTemplateCategoriesFields $fields
     * @return $this
     */
    public function setFields(GetTemplateCategoriesFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, $extra);
    }
}
