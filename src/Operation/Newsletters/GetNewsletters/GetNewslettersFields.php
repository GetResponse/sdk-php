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
            'flags',
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
            'attachments',
            'sendSettings',
            'sendMetrics',
            'createdOn',
        ];
    }
}
