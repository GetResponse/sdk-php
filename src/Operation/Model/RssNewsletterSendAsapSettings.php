<?php
namespace Getresponse\Sdk\Operation\Model;

class RssNewsletterSendAsapSettings extends RssNewsletterSendSettings
{
    /**
     * @param string $filter
     */
    public function __construct($filter)
    {
        parent::__construct('asap', $filter);
    }
}
