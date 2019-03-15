<?php
namespace Getresponse\Sdk\Operation\SubscriptionConfirmations\Body\GetBody;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetBodyFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'subscriptionConfirmationBodyId',
            'name',
            'contentPlain',
            'contentHtml',
        ];
    }
}
