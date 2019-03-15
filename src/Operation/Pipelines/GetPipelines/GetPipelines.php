<?php
namespace Getresponse\Sdk\Operation\Pipelines\GetPipelines;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetPipelines extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/pipelines';

    /** @var GetPipelinesSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetPipelinesFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetPipelinesSortParams $sort
     * @return $this
     */
    public function setSort(GetPipelinesSortParams $sort)
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
     * @param GetPipelinesFields $fields
     * @return $this
     */
    public function setFields(GetPipelinesFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, $this->sort, $extra);
    }
}
