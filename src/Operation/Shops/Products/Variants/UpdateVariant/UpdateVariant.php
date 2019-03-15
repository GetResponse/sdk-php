<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\UpdateVariant;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateProductVariant;

class UpdateVariant extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/products/{productId}/variants/{variantId}';

    /** @var UpdateProductVariant */
    protected $data;

    /** @var string */
    private $shopId;

    /** @var string */
    private $productId;

    /** @var string */
    private $variantId;


    /**
     * @param UpdateProductVariant $data
     * @param string $shopId
     * @param string $productId
     * @param string $variantId
     */
    public function __construct(UpdateProductVariant $data, $shopId, $productId, $variantId)
    {
        $this->data = $data;
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
