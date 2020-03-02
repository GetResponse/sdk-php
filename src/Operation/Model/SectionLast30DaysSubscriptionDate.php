<?php
namespace Getresponse\Sdk\Operation\Model;

class SectionLast30DaysSubscriptionDate extends SearchContactSection
{
    /**
     * @param array $campaignIdsList
     * @param string $logicOperator
     * @param array $subscriberCycle
     */
    public function __construct(array $campaignIdsList, $logicOperator, array $subscriberCycle)
    {
        parent::__construct($campaignIdsList, $logicOperator, $subscriberCycle, 'last_30_days');
    }
}
