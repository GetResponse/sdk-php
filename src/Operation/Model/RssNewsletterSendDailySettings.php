<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class RssNewsletterSendDailySettings extends RssNewsletterSendSettings
{
    /** @var integer */
    private $sendAtHour;


    /**
     * @param string $filter
     * @param integer $sendAtHour
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
