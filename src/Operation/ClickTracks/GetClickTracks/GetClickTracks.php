<?php
namespace Getresponse\Sdk\Operation\ClickTracks\GetClickTracks;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetClickTracks extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/click-tracks';

    /** @var GetClickTracksSearchQuery */
    private $query;

    /** @var GetClickTracksSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetClickTracksFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetClickTracksSearchQuery $query
     * @return $this
     */
    public function setQuery(GetClickTracksSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetClickTracksSortParams $sort
     * @return $this
     */
    public function setSort(GetClickTracksSortParams $sort)
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
     * @param GetClickTracksFields $fields
     * @return $this
     */
    public function setFields(GetClickTracksFields $fields)
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
