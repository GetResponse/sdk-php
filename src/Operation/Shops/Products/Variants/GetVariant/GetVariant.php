<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariant;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetVariant extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/shops/{shopId}/products/{productId}/variants/{variantId}';

    /** @var string */
    private $shopId;

    /** @var string */
    private $productId;

    /** @var string */
    private $variantId;

    /** @var GetVariantFields */
    private $fields;


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
     * @param GetVariantFields $fields
     * @return $this
     */
    public function setFields(GetVariantFields $fields)
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
