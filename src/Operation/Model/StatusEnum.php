<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class StatusEnum extends BaseEnum
{
    const ENABLED = 'enabled';
    const DISABLED = 'disabled';

    /**
     * @return boolean
     */
    public function isMultiple()
    {
        return false;
    }


    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            self::ENABLED,
            self::DISABLED,
        ];
    }


    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return $this->value;
    }
}
