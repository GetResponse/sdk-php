<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageFlagsArray extends BaseEnum
{
    public const OPENRATE = 'openrate';
    public const CLICKTRACK = 'clicktrack';
    public const GOOGLE_ANALYTICS = 'google_analytics';

    /**
     * @return bool
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


        public function jsonSerialize(): array
    {
        return $this->value;
    }
}
