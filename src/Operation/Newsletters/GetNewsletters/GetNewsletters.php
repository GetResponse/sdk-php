<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletters;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletters extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/newsletters';

    /** @var GetNewslettersSearchQuery */
    private $query;

    /** @var GetNewslettersSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetNewslettersFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetNewslettersSearchQuery $query
     * @return $this
     */
    public function setQuery(GetNewslettersSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetNewslettersSortParams $sort
     * @return $this
     */
    public function setSort(GetNewslettersSortParams $sort)
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
     * @param GetNewslettersFields $fields
     * @return $this
     */
    public function setFields(GetNewslettersFields $fields)
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
