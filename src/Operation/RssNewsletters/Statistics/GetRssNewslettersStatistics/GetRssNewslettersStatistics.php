<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\Statistics\GetRssNewslettersStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetRssNewslettersStatistics extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/rss-newsletters/statistics';

    /** @var GetRssNewslettersStatisticsSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetRssNewslettersStatisticsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetRssNewslettersStatisticsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetRssNewslettersStatisticsSearchQuery $query)
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
     * @param GetRssNewslettersStatisticsFields $fields
     * @return $this
     */
    public function setFields(GetRssNewslettersStatisticsFields $fields)
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
