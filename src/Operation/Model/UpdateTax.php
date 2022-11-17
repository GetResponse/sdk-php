<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateTax extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var float */
    private $rate = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }


        public function jsonSerialize(): array
    {
        $data = [
            'name' => $this->name,
            'rate' => $this->rate,
        ];

        return $this->filterUnsetFields($data);
    }
}
