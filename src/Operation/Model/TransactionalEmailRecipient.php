<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TransactionalEmailRecipient extends BaseModel
{
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
            'email' => $this->email,
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
