<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class AutoresponderSendSettings extends BaseModel
{
    /** @var string */
    private $type;

    /** @var int */
    private $delayInHours = self::FIELD_NOT_SET;

    /** @var int */
    private $sendAtHour = self::FIELD_NOT_SET;

    /** @var StringBooleanEnum */
    private $recurrence = self::FIELD_NOT_SET;

    /** @var StringBooleanEnum */
    private $timeTravel = self::FIELD_NOT_SET;

    /** @var array */
    private $excludedDaysOfWeek = self::FIELD_NOT_SET;


    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }


    /**
     * @param int $delayInHours
     */
    public function setDelayInHours($delayInHours)
    {
        $this->delayInHours = $delayInHours;
    }


    /**
     * @param int $sendAtHour
     */
    public function setSendAtHour($sendAtHour)
    {
        $this->sendAtHour = $sendAtHour;
    }


    /**
     * @param StringBooleanEnum $recurrence
     */
    public function setRecurrence(StringBooleanEnum $recurrence)
    {
        $this->recurrence = $recurrence;
    }


    /**
     * @param StringBooleanEnum $timeTravel
     */
    public function setTimeTravel(StringBooleanEnum $timeTravel)
    {
        $this->timeTravel = $timeTravel;
    }


    /**
     * @param array $excludedDaysOfWeek
     */
    public function setExcludedDaysOfWeek(array $excludedDaysOfWeek)
    {
        $this->excludedDaysOfWeek = $excludedDaysOfWeek;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'type' => $this->type,
            'delayInHours' => $this->delayInHours,
            'sendAtHour' => $this->sendAtHour,
            'recurrence' => $this->recurrence,
            'timeTravel' => $this->timeTravel,
            'excludedDaysOfWeek' => $this->excludedDaysOfWeek,
        ];

        return $this->filterUnsetFields($data);
    }
}
