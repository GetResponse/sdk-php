<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class RssNewsletterSendSettings extends BaseModel
{
    /** @var string */
    private $frequency;

    /** @var string */
    private $filter;

    /** @var int */
    private $maxArticles = self::FIELD_NOT_SET;

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


    /**
     * @param string $frequency
     * @param string $filter
     */
    public function __construct($frequency, $filter)
    {
        $this->frequency = $frequency;
        $this->filter = $filter;
    }


    /**
     * @param int $maxArticles
     */
    public function setMaxArticles($maxArticles)
    {
        $this->maxArticles = $maxArticles;
    }


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
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'frequency' => $this->frequency,
            'filter' => $this->filter,
            'maxArticles' => $this->maxArticles,
            'selectedCampaigns' => $this->selectedCampaigns,
            'selectedSegments' => $this->selectedSegments,
            'selectedSuppressions' => $this->selectedSuppressions,
            'excludedCampaigns' => $this->excludedCampaigns,
            'excludedSegments' => $this->excludedSegments,
        ];

        return $this->filterUnsetFields($data);
    }
}
