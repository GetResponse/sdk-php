<?php
namespace Getresponse\Sdk\Operation\Suppressions\GetSuppression;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSuppression extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/suppressions/{suppressionId}';

    /** @var string */
    private $suppressionId;

    /** @var GetSuppressionFields */
    private $fields;


    /**
     * @param string $suppressionId
     */
    public function __construct($suppressionId)
    {
        $this->suppressionId = $suppressionId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{suppressionId}'],
            [$this->suppressionId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetSuppressionFields $fields
     * @return $this
     */
    public function setFields(GetSuppressionFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
