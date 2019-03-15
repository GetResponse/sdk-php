<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignSubscriptionNotifications extends BaseModel
{
    /** @var StatusEnum */
    private $status = self::FIELD_NOT_SET;

    /** @var FromFieldReference[] */
    private $recipients = self::FIELD_NOT_SET;


    /**
     * @param StatusEnum $status
     */
    public function setStatus(StatusEnum $status)
    {
        $this->status = $status;
    }


    /**
     * @param FromFieldReference[] $recipients
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'status' => $this->status,
            'recipients' => $this->recipients,
        ];

        return $this->filterUnsetFields($data);
    }
}
