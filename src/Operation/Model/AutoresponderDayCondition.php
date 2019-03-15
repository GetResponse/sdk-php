<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderDayCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var integer */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     * @param string $operator
     */
    public function __construct($operatorType, $operator)
    {
        parent::__construct('phase');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
    }


    /**
     * @param integer $value
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
