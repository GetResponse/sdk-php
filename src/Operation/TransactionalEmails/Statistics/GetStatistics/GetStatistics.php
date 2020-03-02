<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\Statistics\GetStatistics;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetStatistics extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/transactional-emails/statistics';

    /** @var GetStatisticsSearchQuery */
    private $query;

    /** @var GetStatisticsFields */
    private $fields;


    /**
     * @param GetStatisticsSearchQuery $query
     */
    public function __construct(GetStatisticsSearchQuery $query)
    {
        $this->query = $query;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetStatisticsFields $fields
     * @return $this
     */
    public function setFields(GetStatisticsFields $fields)
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
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, $extra);
    }
}
