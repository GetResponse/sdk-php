<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageTypeOperator extends BaseEnum
{
    const AUTORESPONDER = 'autoresponder';
    const NEWSLETTER = 'newsletter';
    const SPLITTEST = 'splittest';
    const AUTOMATION = 'automation';

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
            self::AUTORESPONDER,
            self::NEWSLETTER,
            self::SPLITTEST,
            self::AUTOMATION,
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
