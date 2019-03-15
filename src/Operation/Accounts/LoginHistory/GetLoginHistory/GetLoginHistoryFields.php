<?php
namespace Getresponse\Sdk\Operation\Accounts\LoginHistory\GetLoginHistory;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetLoginHistoryFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'loginTime',
            'logoutTime',
            'isSuccessful',
            'ip',
        ];
    }
}
