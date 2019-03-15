<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewFromField extends BaseModel
{
    /** @var string */
    private $email;

    /** @var string */
    private $name;


    /**
     * @param string $email
     * @param string $name
     */
    public function __construct($email, $name)
    {
        $this->email = $email;
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
