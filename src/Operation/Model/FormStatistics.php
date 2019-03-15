<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FormStatistics extends BaseModel
{
    /** @var string */
    private $visitors = self::FIELD_NOT_SET;

    /** @var string */
    private $uniqueVisitors = self::FIELD_NOT_SET;

    /** @var string */
    private $subscribed = self::FIELD_NOT_SET;

    /** @var string */
    private $subscriptionRate = self::FIELD_NOT_SET;


    /**
     * @param string $visitors
     */
    public function setVisitors($visitors)
    {
        $this->visitors = $visitors;
    }


    /**
     * @param string $uniqueVisitors
     */
    public function setUniqueVisitors($uniqueVisitors)
    {
        $this->uniqueVisitors = $uniqueVisitors;
    }


    /**
     * @param string $subscribed
     */
    public function setSubscribed($subscribed)
    {
        $this->subscribed = $subscribed;
    }


    /**
     * @param string $subscriptionRate
     */
    public function setSubscriptionRate($subscriptionRate)
    {
        $this->subscriptionRate = $subscriptionRate;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'visitors' => $this->visitors,
            'uniqueVisitors' => $this->uniqueVisitors,
            'subscribed' => $this->subscribed,
            'subscriptionRate' => $this->subscriptionRate,
        ];

        return $this->filterUnsetFields($data);
    }
}
