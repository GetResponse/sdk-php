<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewTax extends BaseModel
{
    /** @var string */
    private $name;

    /** @var float */
    private $rate;


    /**
     * @param string $name
     * @param float $rate
     */
    public function __construct($name, $rate)
    {
        $this->name = $name;
        $this->rate = $rate;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'rate' => $this->rate,
        ];

        return $this->filterUnsetFields($data);
    }
}
