<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Statistics\GetAutoresponderStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAutoresponderStatistics extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/autoresponders/{autoresponderId}/statistics';

    /** @var string */
    private $autoresponderId;

    /** @var GetAutoresponderStatisticsSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetAutoresponderStatisticsFields */
    private $fields;


    /**
     * @param string $autoresponderId
     */
    public function __construct($autoresponderId)
    {
        $this->autoresponderId = $autoresponderId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{autoresponderId}'],
            [$this->autoresponderId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetAutoresponderStatisticsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetAutoresponderStatisticsSearchQuery $query)
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
     * @param GetAutoresponderStatisticsFields $fields
     * @return $this
     */
    public function setFields(GetAutoresponderStatisticsFields $fields)
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
