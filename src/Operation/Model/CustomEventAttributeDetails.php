<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CustomEventAttributeDetails extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $type = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type,
        ];

        return $this->filterUnsetFields($data);
    }
}
