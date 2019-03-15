<?php
namespace Getresponse\Sdk\Operation\Autoresponders\GetAutoresponder;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetAutoresponderFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'clickTracks',
            'autoresponderId',
            'href',
            'name',
            'subject',
            'campaignId',
            'status',
            'editor',
            'fromField',
            'replyTo',
            'content',
            'flags',
            'sendSettings',
            'triggerSettings',
            'statistics',
            'createdOn',
        ];
    }
}
