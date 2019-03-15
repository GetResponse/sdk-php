<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateAccount extends BaseModel
{
    /** @var string */
    private $firstName = self::FIELD_NOT_SET;

    /** @var string */
    private $lastName = self::FIELD_NOT_SET;

    /** @var string */
    private $companyName = self::FIELD_NOT_SET;

    /** @var string */
    private $phone = self::FIELD_NOT_SET;

    /** @var string */
    private $street = self::FIELD_NOT_SET;

    /** @var string */
    private $city = self::FIELD_NOT_SET;

    /** @var string */
    private $state = self::FIELD_NOT_SET;

    /** @var string */
    private $zipCode = self::FIELD_NOT_SET;

    /** @var string */
    private $timeFormat = self::FIELD_NOT_SET;

    /** @var string */
    private $numberOfEmployees = self::FIELD_NOT_SET;


    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }


    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }


    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }


    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }


    /**
     * @param string $timeFormat
     */
    public function setTimeFormat($timeFormat)
    {
        $this->timeFormat = $timeFormat;
    }


    /**
     * @param string $numberOfEmployees
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'companyName' => $this->companyName,
            'phone' => $this->phone,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zipCode' => $this->zipCode,
            'timeFormat' => $this->timeFormat,
            'numberOfEmployees' => $this->numberOfEmployees,
        ];

        return $this->filterUnsetFields($data);
    }
}
