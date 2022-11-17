<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class SpecificDateEnum extends BaseEnum
{
    public const TODAY = 'today';
    public const YESTERDAY = 'yesterday';
    public const LAST_7_DAYS = 'last_7_days';
    public const LAST_30_DAYS = 'last_30_days';
    public const THIS_WEEK = 'this_week';
    public const LAST_WEEK = 'last_week';
    public const THIS_MONTH = 'this_month';
    public const LAST_MONTH = 'last_month';

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
            self::TODAY,
            self::YESTERDAY,
            self::LAST_7_DAYS,
            self::LAST_30_DAYS,
            self::THIS_WEEK,
            self::LAST_WEEK,
            self::THIS_MONTH,
            self::LAST_MONTH,
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
