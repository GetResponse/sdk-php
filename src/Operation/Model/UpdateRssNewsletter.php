<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateRssNewsletter extends BaseModel
{
    /** @var MessageFlagsArray */
    private $flags = self::FIELD_NOT_SET;

    /** @var string */
    private $rssFeedUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $subject = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

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

    /** @var RssNewsletterSendSettings */
    private $sendSettings = self::FIELD_NOT_SET;


    /**
     * @param MessageFlagsArray $flags
     */
    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    /**
     * @param string $rssFeedUrl
     */
    public function setRssFeedUrl($rssFeedUrl)
    {
        $this->rssFeedUrl = $rssFeedUrl;
    }


    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @param RssNewsletterSendSettings $sendSettings
     */
    public function setSendSettings(RssNewsletterSendSettings $sendSettings)
    {
        $this->sendSettings = $sendSettings;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'flags' => $this->flags,
            'rssFeedUrl' => $this->rssFeedUrl,
            'subject' => $this->subject,
            'name' => $this->name,
            'status' => $this->status,
            'editor' => $this->editor,
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'content' => $this->content,
            'sendSettings' => $this->sendSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
