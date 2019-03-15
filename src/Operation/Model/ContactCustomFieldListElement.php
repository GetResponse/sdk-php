<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactCustomFieldListElement extends BaseModel
{
    /** @var string */
    private $customFieldId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $value = self::FIELD_NOT_SET;

    /** @var string */
    private $values = self::FIELD_NOT_SET;

    /** @var string */
    private $type = self::FIELD_NOT_SET;

    /** @var string */
    private $fieldType = self::FIELD_NOT_SET;

    /** @var string */
    private $valueType = self::FIELD_NOT_SET;


    /**
     * @param string $customFieldId
     * @param string $name
     * @param string $value
     * @param string $values
     * @param string $type
     */
    public function __construct($customFieldId, $name, $value, $values, $type)
    {
        $this->customFieldId = $customFieldId;
        $this->name = $name;
        $this->value = $value;
        $this->values = $values;
        $this->type = $type;
    }


    /**
     * @param string $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
    }


    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'name' => $this->name,
            'value' => $this->value,
            'values' => $this->values,
            'type' => $this->type,
            'fieldType' => $this->fieldType,
            'valueType' => $this->valueType,
        ];

        return $this->filterUnsetFields($data);
    }
}
