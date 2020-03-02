<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class CustomFieldFormatEnum extends BaseEnum
{
    const TEXT = 'text';
    const TEXTAREA = 'textarea';
    const RADIO = 'radio';
    const CHECKBOX = 'checkbox';
    const SINGLE_SELECT = 'single_select';
    const MULTI_SELECT = 'multi_select';

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
            self::TEXT,
            self::TEXTAREA,
            self::RADIO,
            self::CHECKBOX,
            self::SINGLE_SELECT,
            self::MULTI_SELECT,
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
