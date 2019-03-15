<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FormVariantShort extends BaseModel
{
    /** @var string */
    private $variant = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $winner = self::FIELD_NOT_SET;

    /** @var string */
    private $status = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\FormStatistics */
    private $statistics = self::FIELD_NOT_SET;


    /**
     * @param string $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $winner
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }


    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @param string $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\FormStatistics $statistics
     */
    public function setStatistics(FormStatistics $statistics)
    {
        $this->statistics = $statistics;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'variant' => $this->variant,
            'name' => $this->name,
            'winner' => $this->winner,
            'status' => $this->status,
            'createdOn' => $this->createdOn,
            'statistics' => $this->statistics,
        ];

        return $this->filterUnsetFields($data);
    }
}
