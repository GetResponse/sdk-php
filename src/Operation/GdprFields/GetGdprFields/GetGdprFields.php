<?php
namespace Getresponse\Sdk\Operation\GdprFields\GetGdprFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetGdprFields extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/gdpr-fields';

    /** @var GetGdprFieldsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetGdprFieldsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetGdprFieldsSortParams $sort
     * @return $this
     */
    public function setSort(GetGdprFieldsSortParams $sort)
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
     * @param GetGdprFieldsFields $fields
     * @return $this
     */
    public function setFields(GetGdprFieldsFields $fields)
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
