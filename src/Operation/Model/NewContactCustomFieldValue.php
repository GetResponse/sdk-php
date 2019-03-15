<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewContactCustomFieldValue extends BaseModel
{
    /** @var string */
    private $customFieldId;

    /** @var array */
    private $value;


    /**
     * @param string $customFieldId
     * @param array $value
     */
    public function __construct($customFieldId, array $value)
    {
        $this->customFieldId = $customFieldId;
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
