<?php
namespace Getresponse\Sdk\Operation\Newsletters\Statistics\GetNewsletterStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletterStatistics extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/newsletters/{newsletterId}/statistics';

    /** @var string */
    private $newsletterId;

    /** @var GetNewsletterStatisticsSearchQuery */
    private $query;

    /** @var Pagination */
    private $pagination;

    /** @var GetNewsletterStatisticsFields */
    private $fields;


    /**
     * @param string $newsletterId
     */
    public function __construct($newsletterId)
    {
        $this->newsletterId = $newsletterId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{newsletterId}'],
            [$this->newsletterId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetNewsletterStatisticsSearchQuery $query
     * @return $this
     */
    public function setQuery(GetNewsletterStatisticsSearchQuery $query)
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
     * @param GetNewsletterStatisticsFields $fields
     * @return $this
     */
    public function setFields(GetNewsletterStatisticsFields $fields)
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
