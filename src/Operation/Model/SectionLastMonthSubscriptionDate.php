<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SectionLastMonthSubscriptionDate extends SearchContactSection
{
    /**
     * @param array $campaignIdsList
     * @param string $logicOperator
     * @param array $subscriberCycle
     */
    public function __construct(array $campaignIdsList, $logicOperator, array $subscriberCycle)
    {
        parent::__construct($campaignIdsList, $logicOperator, $subscriberCycle, 'last_month');
    }
}
