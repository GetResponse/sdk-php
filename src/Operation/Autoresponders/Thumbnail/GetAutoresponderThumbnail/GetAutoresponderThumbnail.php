<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Thumbnail\GetAutoresponderThumbnail;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAutoresponderThumbnail extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/autoresponders/{autoresponderId}/thumbnail';

    /** @var string */
    private $autoresponderId;

    /** @var GetAutoresponderThumbnailUrlQueryParameters */
    private $urlParameterQuery;


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
     * @param GetAutoresponderThumbnailUrlQueryParameters $urlParameterQuery
     * @return $this
     */
    public function setUrlParameterQuery(GetAutoresponderThumbnailUrlQueryParameters $urlParameterQuery)
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
