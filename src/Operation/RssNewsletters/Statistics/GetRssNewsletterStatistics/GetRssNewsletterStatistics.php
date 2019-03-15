<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\Statistics\GetRssNewsletterStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetRssNewsletterStatistics extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/rss-newsletters/{rssNewsletterId}/statistics';

    /** @var string */
    private $rssNewsletterId;

    /** @var GetRssNewsletterStatisticsSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetRssNewsletterStatisticsFields */
    private $fields;


    /**
     * @param string $rssNewsletterId
     */
    public function __construct($rssNewsletterId)
    {
        $this->rssNewsletterId = $rssNewsletterId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{rssNewsletterId}'],
            [$this->rssNewsletterId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetRssNewsletterStatisticsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetRssNewsletterStatisticsSearchQuery $query)
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
     * @param GetRssNewsletterStatisticsFields $fields
     * @return $this
     */
    public function setFields(GetRssNewsletterStatisticsFields $fields)
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
