<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\GetOrder;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetOrder extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/orders/{orderId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $orderId;

    /** @var GetOrderFields */
    private $fields;


    /**
     * @param string $shopId
     * @param string $orderId
     */
    public function __construct($shopId, $orderId)
    {
        $this->shopId = $shopId;
        $this->orderId = $orderId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{orderId}'],
            [$this->shopId, $this->orderId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetOrderFields $fields
     * @return $this
     */
    public function setFields(GetOrderFields $fields)
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
