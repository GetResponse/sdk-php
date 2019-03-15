<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdatePredefinedField extends BaseModel
{
    /** @var string */
    private $value;


    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
