<?php
namespace Getresponse\Sdk\Operation\Accounts\Billing\GetBilling;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetBilling extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/accounts/billing';

    /** @var GetBillingFields */
    private $fields;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @param GetBillingFields $fields
     * @return $this
     */
    public function setFields(GetBillingFields $fields)
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
