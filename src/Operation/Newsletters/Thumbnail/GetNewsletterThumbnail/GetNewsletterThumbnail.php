<?php
namespace Getresponse\Sdk\Operation\Newsletters\Thumbnail\GetNewsletterThumbnail;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletterThumbnail extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/newsletters/{newsletterId}/thumbnail';

    /** @var string */
    private $newsletterId;

    /** @var GetNewsletterThumbnailUrlQueryParameters */
    private $urlParameterQuery;


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
     * @param GetNewsletterThumbnailUrlQueryParameters $urlParameterQuery
     * @return $this
     */
    public function setUrlParameterQuery(GetNewsletterThumbnailUrlQueryParameters $urlParameterQuery)
    {
        $this->urlParameterQuery = $urlParameterQuery;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = null !== $this->urlParameterQuery ? $this->urlParameterQuery->toArray() : [];
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
