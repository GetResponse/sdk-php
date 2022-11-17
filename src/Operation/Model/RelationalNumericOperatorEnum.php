<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class RelationalNumericOperatorEnum extends BaseEnum
{
    public const NUMERIC_LT = 'numeric_lt';
    public const NUMERIC_GT = 'numeric_gt';
    public const NUMERIC_EQ = 'numeric_eq';
    public const NUMERIC_NOT_EQ = 'numeric_not_eq';
    public const NUMERIC_LT_EQ = 'numeric_lt_eq';
    public const NUMERIC_GT_EQ = 'numeric_gt_eq';

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
            self::NUMERIC_LT,
            self::NUMERIC_GT,
            self::NUMERIC_EQ,
            self::NUMERIC_NOT_EQ,
            self::NUMERIC_LT_EQ,
            self::NUMERIC_GT_EQ,
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
