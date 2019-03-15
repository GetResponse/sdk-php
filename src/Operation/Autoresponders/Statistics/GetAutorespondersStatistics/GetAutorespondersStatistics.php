<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Statistics\GetAutorespondersStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAutorespondersStatistics extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/autoresponders/statistics';

    /** @var GetAutorespondersStatisticsSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetAutorespondersStatisticsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetAutorespondersStatisticsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetAutorespondersStatisticsSearchQuery $query)
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
     * @param GetAutorespondersStatisticsFields $fields
     * @return $this
     */
    public function setFields(GetAutorespondersStatisticsFields $fields)
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
