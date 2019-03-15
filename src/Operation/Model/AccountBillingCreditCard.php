<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountBillingCreditCard extends BaseModel
{
    /** @var string */
    private $number = self::FIELD_NOT_SET;

    /** @var string */
    private $expirationDate = self::FIELD_NOT_SET;


    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }


    /**
     * @param string $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'number' => $this->number,
            'expirationDate' => $this->expirationDate,
        ];

        return $this->filterUnsetFields($data);
    }
}
