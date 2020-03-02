<?php
namespace Getresponse\Sdk\Operation\Model;

class OpenedCondition extends ConditionType
{
    /** @var string */
    private $operatorType = self::FIELD_NOT_SET;

    /** @var string */
    private $operator = self::FIELD_NOT_SET;

    /** @var string */
    private $value = self::FIELD_NOT_SET;


    public function __construct()
    {
        parent::__construct('opened');
    }


    /**
     * @param string $operatorType
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
    }


    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
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
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
