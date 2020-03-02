<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateAutoresponder extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $subject = self::FIELD_NOT_SET;

    /** @var string */
    private $campaignId = self::FIELD_NOT_SET;

    /** @var StatusEnum */
    private $status = self::FIELD_NOT_SET;

    /** @var MessageEditorEnum */
    private $editor = self::FIELD_NOT_SET;

    /** @var FromFieldReference */
    private $fromField = self::FIELD_NOT_SET;

    /** @var FromFieldReference */
    private $replyTo = self::FIELD_NOT_SET;

    /** @var MessageContent */
    private $content = self::FIELD_NOT_SET;

    /** @var MessageFlagsArray */
    private $flags = self::FIELD_NOT_SET;

    /** @var AutoresponderSendSettings */
    private $sendSettings = self::FIELD_NOT_SET;

    /** @var AutoresponderTriggerSettings */
    private $triggerSettings = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }


    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    /**
     * @param StatusEnum $status
     */
    public function setStatus(StatusEnum $status)
    {
        $this->status = $status;
    }


    /**
     * @param MessageEditorEnum $editor
     */
    public function setEditor(MessageEditorEnum $editor)
    {
        $this->editor = $editor;
    }


    /**
     * @param FromFieldReference $fromField
     */
    public function setFromField(FromFieldReference $fromField)
    {
        $this->fromField = $fromField;
    }


    /**
     * @param FromFieldReference $replyTo
     */
    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    /**
     * @param MessageContent $content
     */
    public function setContent(MessageContent $content)
    {
        $this->content = $content;
    }


    /**
     * @param MessageFlagsArray $flags
     */
    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    /**
     * @param AutoresponderSendSettings $sendSettings
     */
    public function setSendSettings(AutoresponderSendSettings $sendSettings)
    {
        $this->sendSettings = $sendSettings;
    }


    /**
     * @param AutoresponderTriggerSettings $triggerSettings
     */
    public function setTriggerSettings(AutoresponderTriggerSettings $triggerSettings)
    {
        $this->triggerSettings = $triggerSettings;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'subject' => $this->subject,
            'campaignId' => $this->campaignId,
            'status' => $this->status,
            'editor' => $this->editor,
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'content' => $this->content,
            'flags' => $this->flags,
            'sendSettings' => $this->sendSettings,
            'triggerSettings' => $this->triggerSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
