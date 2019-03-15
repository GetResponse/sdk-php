<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignPostal extends BaseModel
{
    /** @var StringBooleanEnum */
    private $addPostalToMessages = self::FIELD_NOT_SET;

    /** @var string */
    private $city = self::FIELD_NOT_SET;

    /** @var string */
    private $companyName = self::FIELD_NOT_SET;

    /** @var string */
    private $country = self::FIELD_NOT_SET;

    /** @var string */
    private $design = self::FIELD_NOT_SET;

    /** @var string */
    private $state = self::FIELD_NOT_SET;

    /** @var string */
    private $street = self::FIELD_NOT_SET;

    /** @var string */
    private $zipCode = self::FIELD_NOT_SET;


    /**
     * @param StringBooleanEnum $addPostalToMessages
     */
    public function setAddPostalToMessages(StringBooleanEnum $addPostalToMessages)
    {
        $this->addPostalToMessages = $addPostalToMessages;
    }


    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }


    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


    /**
     * @param string $design
     */
    public function setDesign($design)
    {
        $this->design = $design;
    }


    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }


    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'addPostalToMessages' => $this->addPostalToMessages,
            'city' => $this->city,
            'companyName' => $this->companyName,
            'country' => $this->country,
            'design' => $this->design,
            'state' => $this->state,
            'street' => $this->street,
            'zipCode' => $this->zipCode,
        ];

        return $this->filterUnsetFields($data);
    }
}
