<?php

namespace Getresponse\Sdk\Environment;

/**
 * Class GetResponseEnterprisePL
 * @package Getresponse\Sdk\Environment
 */
class GetResponseEnterprisePL extends GetResponseEnterprise
{
    const URL = 'https://api3.getresponse360.pl';

    /**
     * @return string
     */
    public function getUrl()
    {
        return self::URL;
    }
}
