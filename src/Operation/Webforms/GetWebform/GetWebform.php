<?php
namespace Getresponse\Sdk\Operation\Webforms\GetWebform;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetWebform extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/webforms/{webformId}';

    /** @var string */
    private $webformId;

    /** @var GetWebformFields */
    private $fields;


    /**
     * @param string $webformId
     */
    public function __construct($webformId)
    {
        $this->webformId = $webformId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{webformId}'],
            [$this->webformId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetWebformFields $fields
     * @return $this
     */
    public function setFields(GetWebformFields $fields)
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
