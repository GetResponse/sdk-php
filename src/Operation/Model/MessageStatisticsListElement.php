<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class MessageStatisticsListElement extends BaseModel
{
    /** @var string */
    private $timeInterval = self::FIELD_NOT_SET;

    /** @var string */
    private $sent = self::FIELD_NOT_SET;

    /** @var string */
    private $totalOpened = self::FIELD_NOT_SET;

    /** @var string */
    private $uniqueOpened = self::FIELD_NOT_SET;

    /** @var string */
    private $totalClicked = self::FIELD_NOT_SET;

    /** @var string */
    private $uniqueClicked = self::FIELD_NOT_SET;

    /** @var string */
    private $goals = self::FIELD_NOT_SET;

    /** @var string */
    private $uniqueGoals = self::FIELD_NOT_SET;

    /** @var string */
    private $forwarded = self::FIELD_NOT_SET;

    /** @var string */
    private $unsubscribed = self::FIELD_NOT_SET;

    /** @var string */
    private $bounced = self::FIELD_NOT_SET;

    /** @var string */
    private $complaints = self::FIELD_NOT_SET;


    /**
     * @param string $timeInterval
     * @param string $sent
     * @param string $totalOpened
     * @param string $uniqueOpened
     * @param string $totalClicked
     * @param string $uniqueClicked
     * @param string $goals
     * @param string $uniqueGoals
     * @param string $forwarded
     * @param string $unsubscribed
     * @param string $bounced
     * @param string $complaints
     */
    public function __construct($timeInterval, $sent, $totalOpened, $uniqueOpened, $totalClicked, $uniqueClicked, $goals, $uniqueGoals, $forwarded, $unsubscribed, $bounced, $complaints)
    {
        $this->timeInterval = $timeInterval;
        $this->sent = $sent;
        $this->totalOpened = $totalOpened;
        $this->uniqueOpened = $uniqueOpened;
        $this->totalClicked = $totalClicked;
        $this->uniqueClicked = $uniqueClicked;
        $this->goals = $goals;
        $this->uniqueGoals = $uniqueGoals;
        $this->forwarded = $forwarded;
        $this->unsubscribed = $unsubscribed;
        $this->bounced = $bounced;
        $this->complaints = $complaints;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'timeInterval' => $this->timeInterval,
            'sent' => $this->sent,
            'totalOpened' => $this->totalOpened,
            'uniqueOpened' => $this->uniqueOpened,
            'totalClicked' => $this->totalClicked,
            'uniqueClicked' => $this->uniqueClicked,
            'goals' => $this->goals,
            'uniqueGoals' => $this->uniqueGoals,
            'forwarded' => $this->forwarded,
            'unsubscribed' => $this->unsubscribed,
            'bounced' => $this->bounced,
            'complaints' => $this->complaints,
        ];

        return $this->filterUnsetFields($data);
    }
}
