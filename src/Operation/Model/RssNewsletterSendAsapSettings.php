<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

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
