<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WebformListElementStatistics extends BaseModel
{
    /** @var string */
    private $opened = self::FIELD_NOT_SET;

    /** @var string */
    private $subscribed = self::FIELD_NOT_SET;


    /**
     * @param string $opened
     * @param string $subscribed
     */
    public function __construct($opened, $subscribed)
    {
        $this->opened = $opened;
        $this->subscribed = $subscribed;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'opened' => $this->opened,
            'subscribed' => $this->subscribed,
        ];

        return $this->filterUnsetFields($data);
    }
}
