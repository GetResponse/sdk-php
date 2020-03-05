<?php
namespace Getresponse\Sdk\Operation\FromFields\DefaultFromFields\SetDefaultFromField;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class SetDefaultFromField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/from-fields/{fromFieldId}/default';

    /** @var string */
    private $fromFieldId;


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
        return 200;
    }
}
