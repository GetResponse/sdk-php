<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderSendDelaySettings extends AutoresponderSendSettings
{
    /**
     * @param integer $delayInHours
     */
    public function __construct($delayInHours)
    {
        parent::__construct('delay');
        $this->setDelayInHours($delayInHours);
    }
}
