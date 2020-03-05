<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TriggerCustomEvent extends BaseModel
{
    /** @var string */
    private $name;

    /** @var string */
    private $contactId;

    /** @var TriggerCustomEventAttribute[] */
    private $attributes = self::FIELD_NOT_SET;


    /**
     * @param string $name
     * @param string $contactId
     */
    public function __construct($name, $contactId)
    {
        $this->name = $name;
        $this->contactId = $contactId;
    }


    /**
     * @param TriggerCustomEventAttribute[] $attributes
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
            'contactId' => $this->contactId,
            'attributes' => $this->attributes,
        ];

        return $this->filterUnsetFields($data);
    }
}
