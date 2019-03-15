<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CallbackActions extends BaseModel
{
    /** @var boolean */
    private $open = self::FIELD_NOT_SET;

    /** @var boolean */
    private $click = self::FIELD_NOT_SET;

    /** @var boolean */
    private $goal = self::FIELD_NOT_SET;

    /** @var boolean */
    private $subscribe = self::FIELD_NOT_SET;

    /** @var boolean */
    private $unsubscribe = self::FIELD_NOT_SET;

    /** @var boolean */
    private $survey = self::FIELD_NOT_SET;


    /**
     * @param boolean $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }


    /**
     * @param boolean $click
     */
    public function setClick($click)
    {
        $this->click = $click;
    }


    /**
     * @param boolean $goal
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
    }


    /**
     * @param boolean $subscribe
     */
    public function setSubscribe($subscribe)
    {
        $this->subscribe = $subscribe;
    }


    /**
     * @param boolean $unsubscribe
     */
    public function setUnsubscribe($unsubscribe)
    {
        $this->unsubscribe = $unsubscribe;
    }


    /**
     * @param boolean $survey
     */
    public function setSurvey($survey)
    {
        $this->survey = $survey;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'open' => $this->open,
            'click' => $this->click,
            'goal' => $this->goal,
            'subscribe' => $this->subscribe,
            'unsubscribe' => $this->unsubscribe,
            'survey' => $this->survey,
        ];

        return $this->filterUnsetFields($data);
    }
}
