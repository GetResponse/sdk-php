<?php
namespace Getresponse\Sdk\Operation\Model;

class WebinarCondition extends ConditionType
{
    /** @var string */
    private $scope;

    /** @var string */
    private $webinarCondition;

    /** @var string */
    private $contactType;


    /**
     * @param string $scope
     * @param string $webinarCondition
     * @param string $contactType
     */
    public function __construct($scope, $webinarCondition, $contactType)
    {
        parent::__construct('webinar');
        $this->scope = $scope;
        $this->webinarCondition = $webinarCondition;
        $this->contactType = $contactType;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'scope' => $this->scope,
            'webinarCondition' => $this->webinarCondition,
            'contactType' => $this->contactType,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
