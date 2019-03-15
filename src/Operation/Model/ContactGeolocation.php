<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactGeolocation extends BaseModel
{
    /** @var string */
    private $latitude = self::FIELD_NOT_SET;

    /** @var string */
    private $longitude = self::FIELD_NOT_SET;

    /** @var string */
    private $continentCode = self::FIELD_NOT_SET;

    /** @var string */
    private $countryCode = self::FIELD_NOT_SET;

    /** @var string */
    private $region = self::FIELD_NOT_SET;

    /** @var string */
    private $postalCode = self::FIELD_NOT_SET;

    /** @var string */
    private $dmaCode = self::FIELD_NOT_SET;

    /** @var string */
    private $city = self::FIELD_NOT_SET;


    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }


    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }


    /**
     * @param string $continentCode
     */
    public function setContinentCode($continentCode)
    {
        $this->continentCode = $continentCode;
    }


    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }


    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }


    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }


    /**
     * @param string $dmaCode
     */
    public function setDmaCode($dmaCode)
    {
        $this->dmaCode = $dmaCode;
    }


    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'continentCode' => $this->continentCode,
            'countryCode' => $this->countryCode,
            'region' => $this->region,
            'postalCode' => $this->postalCode,
            'dmaCode' => $this->dmaCode,
            'city' => $this->city,
        ];

        return $this->filterUnsetFields($data);
    }
}
