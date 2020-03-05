<?php
namespace Getresponse\Sdk\Operation\Model;

class RssNewsletterSendDailySettings extends RssNewsletterSendSettings
{
    /** @var int */
    private $sendAtHour;


    /**
     * @param string $filter
     * @param int $sendAtHour
     */
    public function __construct($filter, $sendAtHour)
    {
        parent::__construct('daily', $filter);
        $this->sendAtHour = $sendAtHour;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'sendAtHour' => $this->sendAtHour,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
