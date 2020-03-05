<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TriggerCustomEventAttribute extends BaseModel
{
    /** @var string */
    private $name;

    /** @var string */
    private $value;


    /**
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
