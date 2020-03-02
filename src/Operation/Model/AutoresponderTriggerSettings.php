<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderTriggerSettings extends BaseModel
{
    /** @var string */
    private $type;

    /** @var int */
    private $dayOfCycle;

    /** @var array */
    private $selectedCampaigns;

    /** @var array */
    private $selectedSegments = self::FIELD_NOT_SET;


    /**
     * @param string $type
     * @param int $dayOfCycle
     * @param array $selectedCampaigns
     */
    public function __construct($type, $dayOfCycle, array $selectedCampaigns)
    {
        $this->type = $type;
        $this->dayOfCycle = $dayOfCycle;
        $this->selectedCampaigns = $selectedCampaigns;
    }


    /**
     * @param array $selectedSegments
     */
    public function setSelectedSegments(array $selectedSegments)
    {
        $this->selectedSegments = $selectedSegments;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'type' => $this->type,
            'dayOfCycle' => $this->dayOfCycle,
            'selectedCampaigns' => $this->selectedCampaigns,
            'selectedSegments' => $this->selectedSegments,
        ];

        return $this->filterUnsetFields($data);
    }
}
