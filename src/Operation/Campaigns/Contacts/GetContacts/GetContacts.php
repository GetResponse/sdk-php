<?php
namespace Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetContacts extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/campaigns/{campaignId}/contacts';

    /** @var string */
    private $campaignId;

    /** @var GetContactsSearchQuery */
    private $query;

    /** @var GetContactsSortParams */
    private $sort;

    /** @var Pagination */
    private $pagination;

    /** @var GetContactsFields */
    private $fields;


    /**
     * @param string $campaignId
     */
    public function __construct($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{campaignId}'],
            [$this->campaignId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetContactsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetContactsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @param GetContactsSortParams $sort
     * @return $this
     */
    public function setSort(GetContactsSortParams $sort)
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
     * @param GetContactsFields $fields
     * @return $this
     */
    public function setFields(GetContactsFields $fields)
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
