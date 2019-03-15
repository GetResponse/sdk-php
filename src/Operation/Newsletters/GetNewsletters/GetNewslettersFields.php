<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletters;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetNewslettersFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'newsletterId',
            'href',
            'name',
            'type',
            'status',
            'editor',
            'subject',
            'fromField',
            'replyTo',
            'campaign',
            'sendOn',
            'content',
            'flags',
            'attachments',
            'sendSettings',
            'sendMetrics',
            'createdOn',
        ];
    }
}
