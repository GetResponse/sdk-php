<?php
namespace Getresponse\Sdk\Operation\Model;

class LinkClickedCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $scope;

    /** @var string */
    private $clickTrackId;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     * @param string $clickTrackId
     */
    public function __construct($operatorType, $operator, $scope, $clickTrackId)
    {
        parent::__construct('clicked');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->scope = $scope;
        $this->clickTrackId = $clickTrackId;
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
            'clickTrackId' => $this->clickTrackId,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
