<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromField;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFromField extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/from-fields/{fromFieldId}';

    /** @var string */
    private $fromFieldId;

    /** @var GetFromFieldFields */
    private $fields;


    /**
     * @param string $fromFieldId
     */
    public function __construct($fromFieldId)
    {
        $this->fromFieldId = $fromFieldId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{fromFieldId}'],
            [$this->fromFieldId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetFromFieldFields $fields
     * @return $this
     */
    public function setFields(GetFromFieldFields $fields)
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
