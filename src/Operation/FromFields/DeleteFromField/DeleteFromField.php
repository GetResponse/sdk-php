<?php
namespace Getresponse\Sdk\Operation\FromFields\DeleteFromField;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteFromField extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/from-fields/{fromFieldId}';

    /** @var DeleteFromFieldUrlQueryParameters */
    private $urlParameterQuery;

    /** @var string */
    private $fromFieldId;


    /**
     * @param DeleteFromFieldUrlQueryParameters $urlParameterQuery
     * @return $this
     */
    public function setUrlParameterQuery(DeleteFromFieldUrlQueryParameters $urlParameterQuery)
    {
        $this->urlParameterQuery = $urlParameterQuery;
        return $this;
    }


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
        return $this->buildUrlFromTemplate() . $this->buildUrlQuery($this->urlParameterQuery);
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
