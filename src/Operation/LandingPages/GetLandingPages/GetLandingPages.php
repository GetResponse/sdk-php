<?php
namespace Getresponse\Sdk\Operation\LandingPages\GetLandingPages;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetLandingPages extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/landing-pages';

    /** @var GetLandingPagesSearchQuery */
    private $query;

    /** @var GetLandingPagesSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetLandingPagesFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetLandingPagesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetLandingPagesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetLandingPagesSortParams $sort
     * @return $this
     */
    public function setSort(GetLandingPagesSortParams $sort)
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
     * @param GetLandingPagesFields $fields
     * @return $this
     */
    public function setFields(GetLandingPagesFields $fields)
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
