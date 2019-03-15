<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertContactCustomFields extends BaseModel
{
    /** @var NewContactCustomFieldValue[] */
    private $customFieldValues;


    /**
     * @param NewContactCustomFieldValue[] $customFieldValues
     */
    public function __construct(array $customFieldValues)
    {
        $this->customFieldValues = $customFieldValues;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldValues' => $this->customFieldValues,
        ];

        return $this->filterUnsetFields($data);
    }
}
