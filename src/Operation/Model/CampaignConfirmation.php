<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignConfirmation extends BaseModel
{
    /** @var FromFieldReference */
    private $fromField = self::FIELD_NOT_SET;

    /** @var string */
    private $redirectType = self::FIELD_NOT_SET;

    /** @var string */
    private $mimeType = self::FIELD_NOT_SET;

    /** @var string */
    private $redirectUrl = self::FIELD_NOT_SET;

    /** @var FromFieldReference */
    private $replyTo = self::FIELD_NOT_SET;

    /** @var string */
    private $subscriptionConfirmationBodyId = self::FIELD_NOT_SET;

    /** @var string */
    private $subscriptionConfirmationSubjectId = self::FIELD_NOT_SET;


    /**
     * @param FromFieldReference $fromField
     */
    public function setFromField(FromFieldReference $fromField)
    {
        $this->fromField = $fromField;
    }


    /**
     * @param string $redirectType
     */
    public function setRedirectType($redirectType)
    {
        $this->redirectType = $redirectType;
    }


    /**
     * @param string $mimeType
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }


    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }


    /**
     * @param FromFieldReference $replyTo
     */
    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    /**
     * @param string $subscriptionConfirmationBodyId
     */
    public function setSubscriptionConfirmationBodyId($subscriptionConfirmationBodyId)
    {
        $this->subscriptionConfirmationBodyId = $subscriptionConfirmationBodyId;
    }


    /**
     * @param string $subscriptionConfirmationSubjectId
     */
    public function setSubscriptionConfirmationSubjectId($subscriptionConfirmationSubjectId)
    {
        $this->subscriptionConfirmationSubjectId = $subscriptionConfirmationSubjectId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'fromField' => $this->fromField,
            'redirectType' => $this->redirectType,
            'mimeType' => $this->mimeType,
            'redirectUrl' => $this->redirectUrl,
            'replyTo' => $this->replyTo,
            'subscriptionConfirmationBodyId' => $this->subscriptionConfirmationBodyId,
            'subscriptionConfirmationSubjectId' => $this->subscriptionConfirmationSubjectId,
        ];

        return $this->filterUnsetFields($data);
    }
}
