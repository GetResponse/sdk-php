<?php
namespace Getresponse\Sdk\Operation\Campaigns\GetCampaigns;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaigns extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns';

    /** @var GetCampaignsSearchQuery */
    private $query;

    /** @var GetCampaignsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetCampaignsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetCampaignsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetCampaignsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetCampaignsSortParams $sort
     * @return $this
     */
    public function setSort(GetCampaignsSortParams $sort)
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
     * @param GetCampaignsFields $fields
     * @return $this
     */
    public function setFields(GetCampaignsFields $fields)
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
