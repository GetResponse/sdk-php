<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\GetTransactionalEmail;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTransactionalEmail extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/transactional-emails/{transactionalEmailId}';

    /** @var string */
    private $transactionalEmailId;

    /** @var GetTransactionalEmailFields */
    private $fields;


    /**
     * @param string $transactionalEmailId
     */
    public function __construct($transactionalEmailId)
    {
        $this->transactionalEmailId = $transactionalEmailId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{transactionalEmailId}'],
            [$this->transactionalEmailId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetTransactionalEmailFields $fields
     * @return $this
     */
    public function setFields(GetTransactionalEmailFields $fields)
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
