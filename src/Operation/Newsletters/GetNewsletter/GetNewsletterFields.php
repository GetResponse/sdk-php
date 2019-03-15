<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletter;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetNewsletterFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'clickTracks',
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
