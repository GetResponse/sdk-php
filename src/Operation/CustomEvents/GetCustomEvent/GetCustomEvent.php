<?php
namespace Getresponse\Sdk\Operation\CustomEvents\GetCustomEvent;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCustomEvent extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-events/{customEventId}';

    /** @var string */
    private $customEventId;

    /** @var GetCustomEventFields */
    private $fields;


    /**
     * @param string $customEventId
     */
    public function __construct($customEventId)
    {
        $this->customEventId = $customEventId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{customEventId}'],
            [$this->customEventId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetCustomEventFields $fields
     * @return $this
     */
    public function setFields(GetCustomEventFields $fields)
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
