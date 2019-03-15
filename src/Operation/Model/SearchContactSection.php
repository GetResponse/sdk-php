<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class SearchContactSection extends BaseModel
{
    /** @var array */
    private $campaignIdsList;

    /** @var string */
    private $logicOperator;

    /** @var array */
    private $subscriberCycle;

    /** @var ConditionType[] */
    private $conditions = self::FIELD_NOT_SET;

    /** @var string */
    private $subscriptionDate;


    /**
     * @param array $campaignIdsList
     * @param string $logicOperator
     * @param array $subscriberCycle
     * @param string $subscriptionDate
     */
    public function __construct(array $campaignIdsList, $logicOperator, array $subscriberCycle, $subscriptionDate)
    {
        $this->campaignIdsList = $campaignIdsList;
        $this->logicOperator = $logicOperator;
        $this->subscriberCycle = $subscriberCycle;
        $this->subscriptionDate = $subscriptionDate;
    }


    /**
     * @param ConditionType[] $conditions
     */
    public function setConditions(array $conditions)
    {
        $this->conditions = $conditions;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'campaignIdsList' => $this->campaignIdsList,
            'logicOperator' => $this->logicOperator,
            'subscriberCycle' => $this->subscriberCycle,
            'conditions' => $this->conditions,
            'subscriptionDate' => $this->subscriptionDate,
        ];

        return $this->filterUnsetFields($data);
    }
}
