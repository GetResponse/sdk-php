<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class CustomFieldTypeEnum extends BaseEnum
{
    const TEXT = 'text';
    const TEXTAREA = 'textarea';
    const RADIO = 'radio';
    const CHECKBOX = 'checkbox';
    const SINGLE_SELECT = 'single_select';
    const MULTI_SELECT = 'multi_select';
    const NUMBER = 'number';
    const DATE = 'date';
    const DATETIME = 'datetime';
    const COUNTRY = 'country';
    const CURRENCY = 'currency';
    const PHONE = 'phone';
    const GENDER = 'gender';
    const IP = 'ip';
    const URL = 'url';

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
            self::NUMBER,
            self::DATE,
            self::DATETIME,
            self::COUNTRY,
            self::CURRENCY,
            self::PHONE,
            self::GENDER,
            self::IP,
            self::URL,
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
