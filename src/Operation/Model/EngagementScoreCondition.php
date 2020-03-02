<?php
namespace Getresponse\Sdk\Operation\Model;

class EngagementScoreCondition extends ConditionType
{
    /** @var string */
    private $operatorType = self::FIELD_NOT_SET;

    /** @var string */
    private $operator;

    /** @var int */
    private $value;


    /**
     * @param string $operator
     * @param int $value
     */
    public function __construct($operator, $value)
    {
        parent::__construct('engagement_score');
        $this->operator = $operator;
        $this->value = $value;
    }


    /**
     * @param string $operatorType
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
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
