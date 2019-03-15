<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SimpleMetaField extends BaseModel
{
    /** @var string */
    private $metaFieldId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $value = self::FIELD_NOT_SET;

    /** @var string */
    private $valueType = self::FIELD_NOT_SET;


    /**
     * @param string $metaFieldId
     * @param string $href
     * @param string $name
     * @param string $value
     * @param string $valueType
     */
    public function __construct($metaFieldId, $href, $name, $value, $valueType)
    {
        $this->metaFieldId = $metaFieldId;
        $this->href = $href;
        $this->name = $name;
        $this->value = $value;
        $this->valueType = $valueType;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'metaFieldId' => $this->metaFieldId,
            'href' => $this->href,
            'name' => $this->name,
            'value' => $this->value,
            'valueType' => $this->valueType,
        ];

        return $this->filterUnsetFields($data);
    }
}
