<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCustomField extends BaseModel
{
    /** @var string */
    private $name;

    /** @var CustomFieldTypeEnum */
    private $type;

    /** @var CustomFieldFormatEnum */
    private $format = self::FIELD_NOT_SET;

    /** @var StringBooleanEnum */
    private $hidden;

    /** @var array */
    private $values;


    /**
     * @param string $name
     * @param CustomFieldTypeEnum $type
     * @param StringBooleanEnum $hidden
     * @param array $values
     */
    public function __construct($name, CustomFieldTypeEnum $type, StringBooleanEnum $hidden, array $values)
    {
        $this->name = $name;
        $this->type = $type;
        $this->hidden = $hidden;
        $this->values = $values;
    }


    /**
     * @param CustomFieldFormatEnum $format
     */
    public function setFormat(CustomFieldFormatEnum $format)
    {
        $this->format = $format;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type,
            'format' => $this->format,
            'hidden' => $this->hidden,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
