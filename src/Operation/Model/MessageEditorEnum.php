<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageEditorEnum extends BaseEnum
{
    const CUSTOM = 'custom';
    const PLAIN = 'plain';
    const GETRESPONSE = 'getresponse';
    const HTML2 = 'html2';

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
            self::CUSTOM,
            self::PLAIN,
            self::GETRESPONSE,
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
