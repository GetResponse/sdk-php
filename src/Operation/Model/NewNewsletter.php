<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewNewsletter extends BaseModel
{
    /** @var MessageFlagsArray */
    private $flags = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $type = self::FIELD_NOT_SET;

    /** @var MessageEditorEnum */
    private $editor = self::FIELD_NOT_SET;

    /** @var string */
    private $subject;

    /** @var FromFieldReference */
    private $fromField;

    /** @var FromFieldReference */
    private $replyTo = self::FIELD_NOT_SET;

    /** @var CampaignReference */
    private $campaign;

    /** @var string */
    private $sendOn = self::FIELD_NOT_SET;

    /** @var MessageContent */
    private $content;

    /** @var NewsletterAttachment[] */
    private $attachments = self::FIELD_NOT_SET;

    /** @var NewsletterSendSettings */
    private $sendSettings;


    /**
     * @param string $subject
     * @param FromFieldReference $fromField
     * @param CampaignReference $campaign
     * @param MessageContent $content
     * @param NewsletterSendSettings $sendSettings
     */
    public function __construct(
        $subject,
        FromFieldReference $fromField,
        CampaignReference $campaign,
        MessageContent $content,
        NewsletterSendSettings $sendSettings
    ) {
        $this->subject = $subject;
        $this->fromField = $fromField;
        $this->campaign = $campaign;
        $this->content = $content;
        $this->sendSettings = $sendSettings;
    }


    /**
     * @param MessageFlagsArray $flags
     */
    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @param MessageEditorEnum $editor
     */
    public function setEditor(MessageEditorEnum $editor)
    {
        $this->editor = $editor;
    }


    /**
     * @param FromFieldReference $replyTo
     */
    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    /**
     * @param string $sendOn
     */
    public function setSendOn($sendOn)
    {
        $this->sendOn = $sendOn;
    }


    /**
     * @param NewsletterAttachment[] $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'flags' => $this->flags,
            'name' => $this->name,
            'type' => $this->type,
            'editor' => $this->editor,
            'subject' => $this->subject,
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'campaign' => $this->campaign,
            'sendOn' => $this->sendOn,
            'content' => $this->content,
            'attachments' => $this->attachments,
            'sendSettings' => $this->sendSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
