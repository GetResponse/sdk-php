<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ClickTrackElement extends BaseModel
{
    /** @var string */
    private $clickTrackId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $url = self::FIELD_NOT_SET;

    /** @var string */
    private $amount = self::FIELD_NOT_SET;


    /**
     * @param string $clickTrackId
     * @param string $name
     * @param string $url
     */
    public function __construct($clickTrackId, $name, $url)
    {
        $this->clickTrackId = $clickTrackId;
        $this->name = $name;
        $this->url = $url;
    }


    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'clickTrackId' => $this->clickTrackId,
            'name' => $this->name,
            'url' => $this->url,
            'amount' => $this->amount,
        ];

        return $this->filterUnsetFields($data);
    }
}
