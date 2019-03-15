<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class Form extends BaseModel
{
    /** @var string */
    private $formId = self::FIELD_NOT_SET;

    /** @var string */
    private $webformId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $hasVariants = self::FIELD_NOT_SET;

    /** @var string */
    private $scriptUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $status = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\FormStatistics */
    private $statistics = self::FIELD_NOT_SET;

    /** @var string */
    private $settings = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\FormVariantShort[] */
    private $variants = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\ShortCampaign */
    private $campaign = self::FIELD_NOT_SET;


    /**
     * @param string $formId
     * @param string $webformId
     * @param string $name
     * @param string $href
     * @param string $hasVariants
     * @param string $scriptUrl
     * @param string $status
     * @param string $createdOn
     * @param \Getresponse\Sdk\Operation\Model\FormStatistics $statistics
     * @param string $settings
     * @param \Getresponse\Sdk\Operation\Model\FormVariantShort[] $variants
     */
    public function __construct($formId, $webformId, $name, $href, $hasVariants, $scriptUrl, $status, $createdOn, FormStatistics $statistics, $settings, array $variants)
    {
        $this->formId = $formId;
        $this->webformId = $webformId;
        $this->name = $name;
        $this->href = $href;
        $this->hasVariants = $hasVariants;
        $this->scriptUrl = $scriptUrl;
        $this->status = $status;
        $this->createdOn = $createdOn;
        $this->statistics = $statistics;
        $this->settings = $settings;
        $this->variants = $variants;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\ShortCampaign $campaign
     */
    public function setCampaign(ShortCampaign $campaign)
    {
        $this->campaign = $campaign;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'formId' => $this->formId,
            'webformId' => $this->webformId,
            'name' => $this->name,
            'href' => $this->href,
            'hasVariants' => $this->hasVariants,
            'scriptUrl' => $this->scriptUrl,
            'status' => $this->status,
            'createdOn' => $this->createdOn,
            'statistics' => $this->statistics,
            'settings' => $this->settings,
            'variants' => $this->variants,
            'campaign' => $this->campaign,
        ];

        return $this->filterUnsetFields($data);
    }
}
