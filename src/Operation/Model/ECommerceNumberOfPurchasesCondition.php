<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceNumberOfPurchasesCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $scope;

    /** @var int */
    private $value;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     * @param int $value
     */
    public function __construct($operatorType, $operator, $scope, $value)
    {
        parent::__construct('ecommerce_number_of_purchases');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->scope = $scope;
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'scope' => $this->scope,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
