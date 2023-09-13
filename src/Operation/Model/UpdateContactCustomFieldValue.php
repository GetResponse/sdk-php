<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateContactCustomFieldValue extends BaseModel
{
    /** @var string */
    private $customFieldId = self::FIELD_NOT_SET;

    /** @var string */
    private $value = self::FIELD_NOT_SET;


    /**
     * @param string $customFieldId
     * @param array $values
     */
    public function __construct($customFieldId, array $values)
    {
        $this->customFieldId = $customFieldId;
        $this->value = $values;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
