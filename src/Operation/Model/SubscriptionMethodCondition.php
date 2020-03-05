<?php
namespace Getresponse\Sdk\Operation\Model;

class SubscriptionMethodCondition extends ConditionType
{
    /** @var string */
    private $method;

    /** @var string */
    private $webformType = self::FIELD_NOT_SET;

    /** @var string */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $method
     */
    public function __construct($method)
    {
        parent::__construct('subscription_method');
        $this->method = $method;
    }


    /**
     * @param string $webformType
     */
    public function setWebformType($webformType)
    {
        $this->webformType = $webformType;
    }


    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'method' => $this->method,
            'webformType' => $this->webformType,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
