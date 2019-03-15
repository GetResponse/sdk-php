<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderSendCustomSettings extends AutoresponderSendSettings
{
    /**
     * @param integer $sendAtHour
     */
    public function __construct($sendAtHour)
    {
        parent::__construct('custom');
        $this->setSendAtHour($sendAtHour);
    }
}
