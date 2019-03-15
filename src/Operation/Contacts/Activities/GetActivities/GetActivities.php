<?php
namespace Getresponse\Sdk\Operation\Contacts\Activities\GetActivities;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetActivities extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/contacts/{contactId}/activities';

    /** @var string */
    private $contactId;

    /** @var GetActivitiesSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetActivitiesFields */
    private $fields;


    /**
     * @param string $contactId
     */
    public function __construct($contactId)
    {
        $this->contactId = $contactId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{contactId}'],
            [$this->contactId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetActivitiesSearchQuery $query
     * @return $this
     */
    public function setQuery(GetActivitiesSearchQuery $query)
    {
        $this->query = $query;
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
     * @param GetActivitiesFields $fields
     * @return $this
     */
    public function setFields(GetActivitiesFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, $extra);
    }
}
