<?php
namespace Getresponse\Sdk\Operation\Splittests\GetSplittest;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSplittest extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/splittests/{splittestId}';

    /** @var string */
    private $splittestId;

    /** @var GetSplittestFields */
    private $fields;


    /**
     * @param string $splittestId
     */
    public function __construct($splittestId)
    {
        $this->splittestId = $splittestId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{splittestId}'],
            [$this->splittestId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetSplittestFields $fields
     * @return $this
     */
    public function setFields(GetSplittestFields $fields)
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
