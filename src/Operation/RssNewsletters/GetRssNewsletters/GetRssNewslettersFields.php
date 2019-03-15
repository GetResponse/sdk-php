<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetRssNewslettersFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'rssNewsletterId',
            'href',
            'rssFeedUrl',
            'subject',
            'name',
            'status',
            'editor',
            'fromField',
            'replyTo',
            'content',
            'flags',
            'sendSettings',
            'createdOn',
        ];
    }
}
