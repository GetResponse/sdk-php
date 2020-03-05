<?php
namespace Getresponse\Sdk\Operation\Splittests\GetSplittests;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetSplittestsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'splittestId',
            'href',
            'name',
            'campaign',
            'status',
            'winningCriteria',
            'winningTarget',
            'stage',
            'type',
            'samplingPercentage',
            'samplingTime',
            'chooseWinning',
            'winningScoreOpens',
            'winningScoreClicks',
            'winningDelivered',
            'winningScheduleOn',
            'nextStepOn',
            'evaluationSkippedOn',
            'canceledOn',
            'createdOn',
            'newsletters',
            'sendSettings',
        ];
    }
}
