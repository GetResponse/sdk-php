<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountDetails extends BaseModel
{
    /** @var string */
    private $accountId = self::FIELD_NOT_SET;

    /** @var string */
    private $firstName = self::FIELD_NOT_SET;

    /** @var string */
    private $lastName = self::FIELD_NOT_SET;

    /** @var string */
    private $email = self::FIELD_NOT_SET;

    /** @var string */
    private $phone = self::FIELD_NOT_SET;

    /** @var string */
    private $companyName = self::FIELD_NOT_SET;

    /** @var string */
    private $state = self::FIELD_NOT_SET;

    /** @var string */
    private $city = self::FIELD_NOT_SET;

    /** @var string */
    private $street = self::FIELD_NOT_SET;

    /** @var string */
    private $zipCode = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\AccountDetailsCountryCode */
    private $countryCode = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\AccountDetailsIndustryTag */
    private $industryTag = self::FIELD_NOT_SET;

    /** @var string */
    private $numberOfEmployees = self::FIELD_NOT_SET;

    /** @var string */
    private $timeFormat = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\AccountDetailsTimeZone */
    private $timeZone = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;


    /**
     * @param string $accountId
     * @param string $email
     */
    public function __construct($accountId, $email)
    {
        $this->accountId = $accountId;
        $this->email = $email;
    }


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
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
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
     * @param \Getresponse\Sdk\Operation\Model\AccountDetailsCountryCode $countryCode
     */
    public function setCountryCode(AccountDetailsCountryCode $countryCode)
    {
        $this->countryCode = $countryCode;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\AccountDetailsIndustryTag $industryTag
     */
    public function setIndustryTag(AccountDetailsIndustryTag $industryTag)
    {
        $this->industryTag = $industryTag;
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
     * @param \Getresponse\Sdk\Operation\Model\AccountDetailsTimeZone $timeZone
     */
    public function setTimeZone(AccountDetailsTimeZone $timeZone)
    {
        $this->timeZone = $timeZone;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'accountId' => $this->accountId,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'companyName' => $this->companyName,
            'state' => $this->state,
            'city' => $this->city,
            'street' => $this->street,
            'zipCode' => $this->zipCode,
            'countryCode' => $this->countryCode,
            'industryTag' => $this->industryTag,
            'numberOfEmployees' => $this->numberOfEmployees,
            'timeFormat' => $this->timeFormat,
            'timeZone' => $this->timeZone,
            'href' => $this->href,
        ];

        return $this->filterUnsetFields($data);
    }
}
