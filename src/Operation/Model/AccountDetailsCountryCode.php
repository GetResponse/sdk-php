<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountDetailsCountryCode extends BaseModel
{
    /** @var string */
    private $countryCodeId = self::FIELD_NOT_SET;

    /** @var string */
    private $countryCode = self::FIELD_NOT_SET;


    /**
     * @param string $countryCodeId
     */
    public function setCountryCodeId($countryCodeId)
    {
        $this->countryCodeId = $countryCodeId;
    }


    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'countryCodeId' => $this->countryCodeId,
            'countryCode' => $this->countryCode,
        ];

        return $this->filterUnsetFields($data);
    }
}
