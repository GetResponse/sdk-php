<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactCustomField extends BaseModel
{
    /** @var string */
    private $customFieldId = self::FIELD_NOT_SET;

    /** @var string */
    private $values = self::FIELD_NOT_SET;


    /**
     * @param string $customFieldId
     * @param string $values
     */
    public function __construct($customFieldId, $values)
    {
        $this->customFieldId = $customFieldId;
        $this->values = $values;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
