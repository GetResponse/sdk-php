<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletter;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetRssNewsletterFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'clickTracks',
            'flags',
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
            'sendSettings',
            'createdOn',
        ];
    }
}
