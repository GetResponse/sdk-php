<?php
namespace Getresponse\Sdk\Operation\Model;

class ScoringCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator = self::FIELD_NOT_SET;

    /** @var int */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     */
    public function __construct($operatorType)
    {
        parent::__construct('scoring');
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
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
