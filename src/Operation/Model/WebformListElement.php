<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WebformListElement extends BaseModel
{
    /** @var string */
    private $webformId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $scriptUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $status = self::FIELD_NOT_SET;

    /** @var string */
    private $modifiedOn = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\WebformListElementStatistics */
    private $statistics = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\ShortCampaign */
    private $campaign = self::FIELD_NOT_SET;


    /**
     * @param string $webformId
     * @param string $name
     * @param string $href
     * @param string $scriptUrl
     * @param string $status
     * @param string $modifiedOn
     * @param \Getresponse\Sdk\Operation\Model\WebformListElementStatistics $statistics
     * @param \Getresponse\Sdk\Operation\Model\ShortCampaign $campaign
     */
    public function __construct($webformId, $name, $href, $scriptUrl, $status, $modifiedOn, WebformListElementStatistics $statistics, ShortCampaign $campaign)
    {
        $this->webformId = $webformId;
        $this->name = $name;
        $this->href = $href;
        $this->scriptUrl = $scriptUrl;
        $this->status = $status;
        $this->modifiedOn = $modifiedOn;
        $this->statistics = $statistics;
        $this->campaign = $campaign;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'webformId' => $this->webformId,
            'name' => $this->name,
            'href' => $this->href,
            'scriptUrl' => $this->scriptUrl,
            'status' => $this->status,
            'modifiedOn' => $this->modifiedOn,
            'statistics' => $this->statistics,
            'campaign' => $this->campaign,
        ];

        return $this->filterUnsetFields($data);
    }
}
