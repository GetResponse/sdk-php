<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\Statistics\GetStatistics;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetStatisticsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'timeFrame',
            'sent',
            'opened',
            'bounced',
            'complaint',
        ];
    }
}
