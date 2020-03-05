<?php
namespace Getresponse\Sdk\Operation\Model;

class GoalCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var int */
    private $value = self::FIELD_NOT_SET;

    /** @var string */
    private $scope;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     */
    public function __construct($operatorType, $operator, $scope)
    {
        parent::__construct('goal');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->scope = $scope;
    }


    /**
     * @param int $value
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
            'value' => $this->value,
            'scope' => $this->scope,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
