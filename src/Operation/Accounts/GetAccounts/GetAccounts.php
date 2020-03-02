<?php
namespace Getresponse\Sdk\Operation\Accounts\GetAccounts;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAccounts extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/accounts';

    /** @var GetAccountsFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetAccountsFields $fields
     * @return $this
     */
    public function setFields(GetAccountsFields $fields)
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
