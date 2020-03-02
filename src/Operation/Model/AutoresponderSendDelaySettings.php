<?php
namespace Getresponse\Sdk\Operation\Model;

class AutoresponderSendDelaySettings extends AutoresponderSendSettings
{
    /**
     * @param int $delayInHours
     */
    public function __construct($delayInHours)
    {
        parent::__construct('delay');
        $this->setDelayInHours($delayInHours);
    }
}
