<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceProductPurchasedCondition extends ConditionType
{
    /** @var string */
    private $shopScope;

    /** @var string */
    private $categoryScope;

    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $productScope;

    /** @var string */
    private $dateOperator;

    /** @var string */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $shopScope
     * @param string $categoryScope
     * @param string $operatorType
     * @param string $operator
     * @param string $productScope
     * @param string $dateOperator
     */
    public function __construct($shopScope, $categoryScope, $operatorType, $operator, $productScope, $dateOperator)
    {
        parent::__construct('ecommerce_product_purchased');
        $this->shopScope = $shopScope;
        $this->categoryScope = $categoryScope;
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->productScope = $productScope;
        $this->dateOperator = $dateOperator;
    }


    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'shopScope' => $this->shopScope,
            'categoryScope' => $this->categoryScope,
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'productScope' => $this->productScope,
            'dateOperator' => $this->dateOperator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
