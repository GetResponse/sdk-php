<?php
namespace Getresponse\Sdk\Operation\Forms\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetVariants extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/forms/{formId}/variants';

    /** @var string */
    private $formId;

    /** @var GetVariantsFields */
    private $fields;


    /**
     * @param string $formId
     */
    public function __construct($formId)
    {
        $this->formId = $formId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{formId}'],
            [$this->formId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetVariantsFields $fields
     * @return $this
     */
    public function setFields(GetVariantsFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
