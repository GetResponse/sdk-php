<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class CustomFieldTypeEnum extends BaseEnum
{
    public const TEXT = 'text';
    public const TEXTAREA = 'textarea';
    public const RADIO = 'radio';
    public const CHECKBOX = 'checkbox';
    public const SINGLE_SELECT = 'single_select';
    public const MULTI_SELECT = 'multi_select';
    public const NUMBER = 'number';
    public const DATE = 'date';
    public const DATETIME = 'datetime';
    public const COUNTRY = 'country';
    public const CURRENCY = 'currency';
    public const PHONE = 'phone';
    public const GENDER = 'gender';
    public const IP = 'ip';
    public const URL = 'url';

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
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
