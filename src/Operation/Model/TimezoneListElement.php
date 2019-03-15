<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TimezoneListElement extends BaseModel
{
    /** @var string */
    private $timezoneId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $offset = self::FIELD_NOT_SET;

    /** @var string */
    private $country = self::FIELD_NOT_SET;


    /**
     * @param string $timezoneId
     */
    public function __construct($timezoneId)
    {
        $this->timezoneId = $timezoneId;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }


    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'timezoneId' => $this->timezoneId,
            'name' => $this->name,
            'offset' => $this->offset,
            'country' => $this->country,
        ];

        return $this->filterUnsetFields($data);
    }
}
