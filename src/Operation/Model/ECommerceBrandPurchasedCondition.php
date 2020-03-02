<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceBrandPurchasedCondition extends ConditionType
{
    /** @var string */
    private $scope;

    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $value;


    /**
     * @param string $scope
     * @param string $operatorType
     * @param string $operator
     * @param string $value
     */
    public function __construct($scope, $operatorType, $operator, $value)
    {
        parent::__construct('ecommerce_brand_purchased');
        $this->scope = $scope;
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'scope' => $this->scope,
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
