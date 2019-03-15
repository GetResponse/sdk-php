<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCampaign extends BaseModel
{
    /** @var string */
    private $name;

    /** @var string */
    private $languageCode = self::FIELD_NOT_SET;

    /** @var StringBooleanEnum */
    private $isDefault = self::FIELD_NOT_SET;

    /** @var CampaignPostal */
    private $postal = self::FIELD_NOT_SET;

    /** @var CampaignConfirmation */
    private $confirmation = self::FIELD_NOT_SET;

    /** @var CampaignOptinTypes */
    private $optinTypes = self::FIELD_NOT_SET;

    /** @var CampaignSubscriptionNotifications */
    private $subscriptionNotifications = self::FIELD_NOT_SET;

    /** @var CampaignProfile */
    private $profile = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $languageCode
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }


    /**
     * @param StringBooleanEnum $isDefault
     */
    public function setIsDefault(StringBooleanEnum $isDefault)
    {
        $this->isDefault = $isDefault;
    }


    /**
     * @param CampaignPostal $postal
     */
    public function setPostal(CampaignPostal $postal)
    {
        $this->postal = $postal;
    }


    /**
     * @param CampaignConfirmation $confirmation
     */
    public function setConfirmation(CampaignConfirmation $confirmation)
    {
        $this->confirmation = $confirmation;
    }


    /**
     * @param CampaignOptinTypes $optinTypes
     */
    public function setOptinTypes(CampaignOptinTypes $optinTypes)
    {
        $this->optinTypes = $optinTypes;
    }


    /**
     * @param CampaignSubscriptionNotifications $subscriptionNotifications
     */
    public function setSubscriptionNotifications(CampaignSubscriptionNotifications $subscriptionNotifications)
    {
        $this->subscriptionNotifications = $subscriptionNotifications;
    }


    /**
     * @param CampaignProfile $profile
     */
    public function setProfile(CampaignProfile $profile)
    {
        $this->profile = $profile;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'languageCode' => $this->languageCode,
            'isDefault' => $this->isDefault,
            'postal' => $this->postal,
            'confirmation' => $this->confirmation,
            'optinTypes' => $this->optinTypes,
            'subscriptionNotifications' => $this->subscriptionNotifications,
            'profile' => $this->profile,
        ];

        return $this->filterUnsetFields($data);
    }
}
