<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class StringBooleanEnum extends BaseEnum
{
    public const TRUE = 'true';
    public const FALSE = 'false';

    /**
     * @return bool
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
            self::TRUE,
            self::FALSE,
        ];
    }


    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
