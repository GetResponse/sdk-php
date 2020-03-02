<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\DeleteCart;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteCart extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/carts/{cartId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $cartId;


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
