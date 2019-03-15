<?php
namespace Getresponse\Sdk\Operation\SubscriptionConfirmations\Subject\GetSubject;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetSubjectFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'subscriptionConfirmationSubjectId',
            'subject',
            'isPrivate',
        ];
    }
}
