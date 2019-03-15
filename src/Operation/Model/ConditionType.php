<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class ConditionType extends BaseModel
{
    /** @var string */
    private $conditionType;


    /**
     * @param string $conditionType
     */
    public function __construct($conditionType)
    {
        $this->conditionType = $conditionType;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'conditionType' => $this->conditionType,
        ];

        return $this->filterUnsetFields($data);
    }
}
