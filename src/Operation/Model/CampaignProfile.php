<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignProfile extends BaseModel
{
    /** @var string */
    private $description = self::FIELD_NOT_SET;

    /** @var string */
    private $industryTagId = self::FIELD_NOT_SET;

    /** @var string */
    private $logo = self::FIELD_NOT_SET;

    /** @var string */
    private $logoLinkUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $title = self::FIELD_NOT_SET;


    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @param string $industryTagId
     */
    public function setIndustryTagId($industryTagId)
    {
        $this->industryTagId = $industryTagId;
    }


    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }


    /**
     * @param string $logoLinkUrl
     */
    public function setLogoLinkUrl($logoLinkUrl)
    {
        $this->logoLinkUrl = $logoLinkUrl;
    }


    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'description' => $this->description,
            'industryTagId' => $this->industryTagId,
            'logo' => $this->logo,
            'logoLinkUrl' => $this->logoLinkUrl,
            'title' => $this->title,
        ];

        return $this->filterUnsetFields($data);
    }
}
