<?php
namespace Getresponse\Sdk\Operation\Model;

class NotOpenedCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $scope = self::FIELD_NOT_SET;

    /** @var string */
    private $dateOperator;

    /** @var string */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $dateOperator
     */
    public function __construct($operatorType, $operator, $dateOperator)
    {
        parent::__construct('not_opened');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->dateOperator = $dateOperator;
    }


    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
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
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'scope' => $this->scope,
            'dateOperator' => $this->dateOperator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
