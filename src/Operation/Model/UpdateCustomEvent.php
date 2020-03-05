<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCustomEvent extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var CustomEventAttributeDetails[] */
    private $attributes = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param CustomEventAttributeDetails[] $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'attributes' => $this->attributes,
        ];

        return $this->filterUnsetFields($data);
    }
}
