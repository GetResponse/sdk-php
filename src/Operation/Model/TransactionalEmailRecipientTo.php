<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TransactionalEmailRecipientTo extends BaseModel
{
    /** @var string */
    private $validSince = self::FIELD_NOT_SET;

    /** @var string */
    private $email;

    /** @var string */
    private $name = self::FIELD_NOT_SET;


    /**
     * @param string $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }


    /**
     * @param string $validSince
     */
    public function setValidSince($validSince)
    {
        $this->validSince = $validSince;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'validSince' => $this->validSince,
            'email' => $this->email,
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
