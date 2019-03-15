<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageFlags extends BaseEnum
{
    const OPENRATE = 'openrate';
    const CLICKTRACK = 'clicktrack';
    const GOOGLE_ANALYTICS = 'google_analytics';

    /**
     * @return boolean
     */
    public function isMultiple()
    {
        return true;
    }


    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            self::OPENRATE,
            self::CLICKTRACK,
            self::GOOGLE_ANALYTICS,
        ];
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->value;
    }
}
