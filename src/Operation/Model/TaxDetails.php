<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TaxDetails extends BaseModel
{
    /** @var string */
    private $taxId = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $rate = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var string */
    private $updatedOn = self::FIELD_NOT_SET;


    /**
     * @param string $taxId
     * @param string $href
     * @param string $name
     * @param string $rate
     * @param string $createdOn
     * @param string $updatedOn
     */
    public function __construct($taxId, $href, $name, $rate, $createdOn, $updatedOn)
    {
        $this->taxId = $taxId;
        $this->href = $href;
        $this->name = $name;
        $this->rate = $rate;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'taxId' => $this->taxId,
            'href' => $this->href,
            'name' => $this->name,
            'rate' => $this->rate,
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
