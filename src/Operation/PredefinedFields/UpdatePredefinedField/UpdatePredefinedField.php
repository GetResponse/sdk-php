<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\UpdatePredefinedField;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdatePredefinedField as ModelUpdatePredefinedField;

class UpdatePredefinedField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/predefined-fields/{predefinedFieldId}';

    /** @var ModelUpdatePredefinedField */
    protected $data;

    /** @var string */
    private $predefinedFieldId;


    /**
     * @param ModelUpdatePredefinedField $data
     * @param string $predefinedFieldId
     */
    public function __construct(ModelUpdatePredefinedField $data, $predefinedFieldId)
    {
        $this->data = $data;
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
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 200;
    }
}
