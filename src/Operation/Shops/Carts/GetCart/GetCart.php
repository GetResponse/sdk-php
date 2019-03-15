<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\GetCart;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCart extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/carts/{cartId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $cartId;

    /** @var GetCartFields */
    private $fields;


    /**
     * @param string $shopId
     * @param string $cartId
     */
    public function __construct($shopId, $cartId)
    {
        $this->shopId = $shopId;
        $this->cartId = $cartId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{cartId}'],
            [$this->shopId, $this->cartId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetCartFields $fields
     * @return $this
     */
    public function setFields(GetCartFields $fields)
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
