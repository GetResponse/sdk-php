<?php
namespace Getresponse\Sdk\Operation\CustomFields\GetCustomField;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCustomField extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/custom-fields/{customFieldId}';

    /** @var string */
    private $customFieldId;

    /** @var GetCustomFieldFields */
    private $fields;


    /**
     * @param string $customFieldId
     */
    public function __construct($customFieldId)
    {
        $this->customFieldId = $customFieldId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{customFieldId}'],
            [$this->customFieldId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetCustomFieldFields $fields
     * @return $this
     */
    public function setFields(GetCustomFieldFields $fields)
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
