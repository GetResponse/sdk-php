<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCustomField extends BaseModel
{
    /** @var StringBooleanEnum */
    private $hidden;

    /** @var array */
    private $values;


    /**
     * @param StringBooleanEnum $hidden
     * @param array $values
     */
    public function __construct(StringBooleanEnum $hidden, array $values)
    {
        $this->hidden = $hidden;
        $this->values = $values;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'hidden' => $this->hidden,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
