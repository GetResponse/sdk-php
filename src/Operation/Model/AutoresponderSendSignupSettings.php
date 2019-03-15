<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderSendSignupSettings extends AutoresponderSendSettings
{
    public function __construct()
    {
        parent::__construct('signup');
    }
}
