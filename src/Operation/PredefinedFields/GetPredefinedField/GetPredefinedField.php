<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedField;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetPredefinedField extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/predefined-fields/{predefinedFieldId}';

    /** @var string */
    private $predefinedFieldId;

    /** @var GetPredefinedFieldFields */
    private $fields;


    /**
     * @param string $predefinedFieldId
     */
    public function __construct($predefinedFieldId)
    {
        $this->predefinedFieldId = $predefinedFieldId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{predefinedFieldId}'],
            [$this->predefinedFieldId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetPredefinedFieldFields $fields
     * @return $this
     */
    public function setFields(GetPredefinedFieldFields $fields)
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
