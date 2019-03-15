<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class RssNewsletterSendMonthlySettings extends RssNewsletterSendSettings
{
    /** @var integer */
    private $sendAtHour;

    /** @var integer */
    private $sendAtMonthDay;


    /**
     * @param string $filter
     * @param integer $sendAtHour
     * @param integer $sendAtMonthDay
     */
    public function __construct($filter, $sendAtHour, $sendAtMonthDay)
    {
        parent::__construct('monthly', $filter);
        $this->sendAtHour = $sendAtHour;
        $this->sendAtMonthDay = $sendAtMonthDay;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'sendAtHour' => $this->sendAtHour,
            'sendAtMonthDay' => $this->sendAtMonthDay,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
