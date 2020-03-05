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
    private $state = self::FIELD_NOT_SET;

    /** @var string */
    private $city = self::FIELD_NOT_SET;

    /** @var string */
    private $street = self::FIELD_NOT_SET;

    /** @var string */
    private $zipCode = self::FIELD_NOT_SET;

    /** @var string */
    private $numberOfEmployees = self::FIELD_NOT_SET;

    /** @var string */
    private $timeFormat = self::FIELD_NOT_SET;


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
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @param string $numberOfEmployees
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }


    /**
     * @param string $timeFormat
     */
    public function setTimeFormat($timeFormat)
    {
        $this->timeFormat = $timeFormat;
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
            'state' => $this->state,
            'city' => $this->city,
            'street' => $this->street,
            'zipCode' => $this->zipCode,
            'numberOfEmployees' => $this->numberOfEmployees,
            'timeFormat' => $this->timeFormat,
        ];

        return $this->filterUnsetFields($data);
    }
}
