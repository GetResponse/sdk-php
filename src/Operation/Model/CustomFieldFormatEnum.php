<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class CustomFieldFormatEnum extends BaseEnum
{
    public const TEXT = 'text';
    public const TEXTAREA = 'textarea';
    public const RADIO = 'radio';
    public const CHECKBOX = 'checkbox';
    public const SINGLE_SELECT = 'single_select';
    public const MULTI_SELECT = 'multi_select';

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
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
