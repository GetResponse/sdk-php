<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderSendImmediatelySettings extends AutoresponderSendSettings
{
    public function __construct()
    {
        parent::__construct('immediately');
    }
}
