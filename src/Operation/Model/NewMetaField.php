<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewMetaField extends BaseModel
{
    /** @var string */
    private $name;

    /** @var string */
    private $value;

    /** @var string */
    private $valueType;

    /** @var string */
    private $description = self::FIELD_NOT_SET;


    /**
     * @param string $name
     * @param string $value
     * @param string $valueType
     */
    public function __construct($name, $value, $valueType)
    {
        $this->name = $name;
        $this->value = $value;
        $this->valueType = $valueType;
    }


    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'value' => $this->value,
            'valueType' => $this->valueType,
            'description' => $this->description,
        ];

        return $this->filterUnsetFields($data);
    }
}
