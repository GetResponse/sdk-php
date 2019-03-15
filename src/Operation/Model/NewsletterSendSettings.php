<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewsletterSendSettings extends BaseModel
{
    /** @var array */
    private $selectedCampaigns = self::FIELD_NOT_SET;

    /** @var array */
    private $selectedSegments = self::FIELD_NOT_SET;

    /** @var array */
    private $selectedSuppressions = self::FIELD_NOT_SET;

    /** @var array */
    private $excludedCampaigns = self::FIELD_NOT_SET;

    /** @var array */
    private $excludedSegments = self::FIELD_NOT_SET;

    /** @var array */
    private $selectedContacts = self::FIELD_NOT_SET;

    /** @var StringBooleanEnum */
    private $timeTravel = self::FIELD_NOT_SET;

    /** @var StringBooleanEnum */
    private $perfectTiming = self::FIELD_NOT_SET;


    /**
     * @param array $selectedCampaigns
     */
    public function setSelectedCampaigns(array $selectedCampaigns)
    {
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
     * @param array $selectedSuppressions
     */
    public function setSelectedSuppressions(array $selectedSuppressions)
    {
        $this->selectedSuppressions = $selectedSuppressions;
    }


    /**
     * @param array $excludedCampaigns
     */
    public function setExcludedCampaigns(array $excludedCampaigns)
    {
        $this->excludedCampaigns = $excludedCampaigns;
    }


    /**
     * @param array $excludedSegments
     */
    public function setExcludedSegments(array $excludedSegments)
    {
        $this->excludedSegments = $excludedSegments;
    }


    /**
     * @param array $selectedContacts
     */
    public function setSelectedContacts(array $selectedContacts)
    {
        $this->selectedContacts = $selectedContacts;
    }


    /**
     * @param StringBooleanEnum $timeTravel
     */
    public function setTimeTravel(StringBooleanEnum $timeTravel)
    {
        $this->timeTravel = $timeTravel;
    }


    /**
     * @param StringBooleanEnum $perfectTiming
     */
    public function setPerfectTiming(StringBooleanEnum $perfectTiming)
    {
        $this->perfectTiming = $perfectTiming;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'selectedCampaigns' => $this->selectedCampaigns,
            'selectedSegments' => $this->selectedSegments,
            'selectedSuppressions' => $this->selectedSuppressions,
            'excludedCampaigns' => $this->excludedCampaigns,
            'excludedSegments' => $this->excludedSegments,
            'selectedContacts' => $this->selectedContacts,
            'timeTravel' => $this->timeTravel,
            'perfectTiming' => $this->perfectTiming,
        ];

        return $this->filterUnsetFields($data);
    }
}
