<?php
namespace Getresponse\Sdk\Operation\Autoresponders\GetAutoresponder;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAutoresponder extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/autoresponders/{autoresponderId}';

    /** @var string */
    private $autoresponderId;

    /** @var GetAutoresponderFields */
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
     * @param GetAutoresponderFields $fields
     * @return $this
     */
    public function setFields(GetAutoresponderFields $fields)
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
