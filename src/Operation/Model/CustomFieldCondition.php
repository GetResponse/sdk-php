<?php
namespace Getresponse\Sdk\Operation\Model;

class CustomFieldCondition extends ConditionType
{
    /** @var string */
    private $scope;

    /** @var string */
    private $operatorType = self::FIELD_NOT_SET;

    /** @var string */
    private $operator;

    /** @var string */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $scope
     * @param string $operator
     */
    public function __construct($scope, $operator)
    {
        parent::__construct('custom');
        $this->scope = $scope;
        $this->operator = $operator;
    }


    /**
     * @param string $operatorType
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
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
            'scope' => $this->scope,
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
