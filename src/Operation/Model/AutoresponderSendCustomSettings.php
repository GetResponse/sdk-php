<?php
namespace Getresponse\Sdk\Operation\Model;

class AutoresponderSendCustomSettings extends AutoresponderSendSettings
{
    /**
     * @param int $sendAtHour
     */
    public function __construct($sendAtHour)
    {
        parent::__construct('custom');
        $this->setSendAtHour($sendAtHour);
    }
}
