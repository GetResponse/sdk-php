<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\DeleteVariant;

use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class DeleteVariant extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/products/{productId}/variants/{variantId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $productId;

    /** @var string */
    private $variantId;


    /**
     * @param string $shopId
     * @param string $productId
     * @param string $variantId
     */
    public function __construct($shopId, $productId, $variantId)
    {
        $this->shopId = $shopId;
        $this->productId = $productId;
        $this->variantId = $variantId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{productId}', '{variantId}'],
            [$this->shopId, $this->productId, $this->variantId],
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
