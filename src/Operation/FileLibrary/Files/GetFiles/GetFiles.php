<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFiles extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/file-library/files';

    /** @var GetFilesSearchQuery */
    private $query;

    /** @var GetFilesSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetFilesFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetFilesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetFilesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetFilesSortParams $sort
     * @return $this
     */
    public function setSort(GetFilesSortParams $sort)
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
     * @param GetFilesFields $fields
     * @return $this
     */
    public function setFields(GetFilesFields $fields)
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
