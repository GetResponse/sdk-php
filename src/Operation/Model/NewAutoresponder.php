<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewAutoresponder extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $subject;

    /** @var string */
    private $campaignId = self::FIELD_NOT_SET;

    /** @var StatusEnum */
    private $status;

    /** @var MessageEditorEnum */
    private $editor = self::FIELD_NOT_SET;

    /** @var FromFieldReference */
    private $fromField = self::FIELD_NOT_SET;

    /** @var FromFieldReference */
    private $replyTo = self::FIELD_NOT_SET;

    /** @var MessageContent */
    private $content;

    /** @var MessageFlagsArray */
    private $flags = self::FIELD_NOT_SET;

    /** @var AutoresponderSendSettings */
    private $sendSettings;

    /** @var AutoresponderTriggerSettings */
    private $triggerSettings;


    /**
     * @param string $subject
     * @param StatusEnum $status
     * @param MessageContent $content
     * @param AutoresponderSendSettings $sendSettings
     * @param AutoresponderTriggerSettings $triggerSettings
     */
    public function __construct(
        $subject,
        StatusEnum $status,
        MessageContent $content,
        AutoresponderSendSettings $sendSettings,
        AutoresponderTriggerSettings $triggerSettings
    ) {
        $this->subject = $subject;
        $this->status = $status;
        $this->content = $content;
        $this->sendSettings = $sendSettings;
        $this->triggerSettings = $triggerSettings;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
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
     * @param MessageFlagsArray $flags
     */
    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
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
