<?php
namespace Getresponse\Sdk\Operation\Tags\GetTag;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTag extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/tags/{tagId}';

    /** @var string */
    private $tagId;

    /** @var GetTagFields */
    private $fields;


    /**
     * @param string $tagId
     */
    public function __construct($tagId)
    {
        $this->tagId = $tagId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{tagId}'],
            [$this->tagId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetTagFields $fields
     * @return $this
     */
    public function setFields(GetTagFields $fields)
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
