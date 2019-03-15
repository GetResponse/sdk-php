<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CustomFieldDetail extends BaseModel
{
    /** @var string */
    private $customFieldId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $fieldType = self::FIELD_NOT_SET;

    /** @var string */
    private $format = self::FIELD_NOT_SET;

    /** @var string */
    private $valueType = self::FIELD_NOT_SET;

    /** @var string */
    private $type = self::FIELD_NOT_SET;

    /** @var string */
    private $hidden = self::FIELD_NOT_SET;

    /** @var array */
    private $values = self::FIELD_NOT_SET;


    /**
     * @param string $customFieldId
     * @param string $href
     * @param string $name
     * @param string $fieldType
     * @param string $valueType
     * @param string $type
     * @param string $hidden
     * @param array $values
     */
    public function __construct($customFieldId, $href, $name, $fieldType, $valueType, $type, $hidden, array $values)
    {
        $this->customFieldId = $customFieldId;
        $this->href = $href;
        $this->name = $name;
        $this->fieldType = $fieldType;
        $this->valueType = $valueType;
        $this->type = $type;
        $this->hidden = $hidden;
        $this->values = $values;
    }


    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'href' => $this->href,
            'name' => $this->name,
            'fieldType' => $this->fieldType,
            'format' => $this->format,
            'valueType' => $this->valueType,
            'type' => $this->type,
            'hidden' => $this->hidden,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
