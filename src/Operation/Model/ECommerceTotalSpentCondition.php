<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceTotalSpentCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $scope;

    /** @var float */
    private $value;

    /** @var string */
    private $currency;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     * @param float $value
     * @param string $currency
     */
    public function __construct($operatorType, $operator, $scope, $value, $currency)
    {
        parent::__construct('ecommerce_total_spent');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->scope = $scope;
        $this->value = $value;
        $this->currency = $currency;
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
            'currency' => $this->currency,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
