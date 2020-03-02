<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageEditorEnum extends BaseEnum
{
    const CUSTOM = 'custom';
    const TEXT = 'text';
    const GETRESPONSE = 'getresponse';
    const LEGACY = 'legacy';
    const HTML2 = 'html2';

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
            self::CUSTOM,
            self::TEXT,
            self::GETRESPONSE,
            self::LEGACY,
            self::HTML2,
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
