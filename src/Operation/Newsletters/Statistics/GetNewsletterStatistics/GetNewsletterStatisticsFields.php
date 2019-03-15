<?php
namespace Getresponse\Sdk\Operation\Newsletters\Statistics\GetNewsletterStatistics;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetNewsletterStatisticsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'timeInterval',
            'sent',
            'totalOpened',
            'uniqueOpened',
            'totalClicked',
            'uniqueClicked',
            'goals',
            'uniqueGoals',
            'forwarded',
            'unsubscribed',
            'bounced',
            'complaints',
        ];
    }
}
