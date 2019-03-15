<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetRssNewsletters extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/rss-newsletters';

    /** @var GetRssNewslettersSearchQuery */
    private $query;

    /** @var GetRssNewslettersSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetRssNewslettersFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetRssNewslettersSearchQuery $query
     * @return $this
     */
    public function setQuery(GetRssNewslettersSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetRssNewslettersSortParams $sort
     * @return $this
     */
    public function setSort(GetRssNewslettersSortParams $sort)
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
     * @param GetRssNewslettersFields $fields
     * @return $this
     */
    public function setFields(GetRssNewslettersFields $fields)
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
