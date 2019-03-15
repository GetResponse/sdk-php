<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateContactCampaign extends BaseModel
{
    /** @var string */
    private $campaignId = self::FIELD_NOT_SET;


    /**
     * @param string $campaignId
     */
    public function __construct($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'campaignId' => $this->campaignId,
        ];

        return $this->filterUnsetFields($data);
    }
}
