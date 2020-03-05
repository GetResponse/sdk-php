<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Folders\GetFolders;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFolders extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/file-library/folders';

    /** @var GetFoldersSearchQuery */
    private $query;

    /** @var GetFoldersSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetFoldersFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetFoldersSearchQuery $query
     * @return $this
     */
    public function setQuery(GetFoldersSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetFoldersSortParams $sort
     * @return $this
     */
    public function setSort(GetFoldersSortParams $sort)
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
     * @param GetFoldersFields $fields
     * @return $this
     */
    public function setFields(GetFoldersFields $fields)
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
