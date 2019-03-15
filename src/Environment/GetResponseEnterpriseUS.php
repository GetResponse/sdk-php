<?php

namespace Getresponse\Sdk\Environment;

/**
 * Class GetResponseEnterpriseUS
 * @package Getresponse\Sdk\Environment
 */
class GetResponseEnterpriseUS extends GetResponseEnterprise
{
    const URL = 'https://api3.getresponse360.com';

    /**
     * @return string
     */
    public function getUrl()
    {
        return self::URL;
    }
}
