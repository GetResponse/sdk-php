<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\DeletePredefinedField;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeletePredefinedField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/predefined-fields/{predefinedFieldId}';

    /** @var string */
    private $predefinedFieldId;


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
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::DELETE;
    }


    /**
     * @return string
     */
    public function getBody()
    {
        return '';
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 204;
    }
}
