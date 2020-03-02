<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewRssNewsletter extends BaseModel
{
    /** @var MessageFlagsArray */
    private $flags = self::FIELD_NOT_SET;

    /** @var string */
    private $rssFeedUrl;

    /** @var string */
    private $subject;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var StatusEnum */
    private $status;

    /** @var MessageEditorEnum */
    private $editor = self::FIELD_NOT_SET;

    /** @var FromFieldReference */
    private $fromField;

    /** @var FromFieldReference */
    private $replyTo = self::FIELD_NOT_SET;

    /** @var MessageContent */
    private $content;

    /** @var RssNewsletterSendSettings */
    private $sendSettings;


    /**
     * @param string $rssFeedUrl
     * @param string $subject
     * @param StatusEnum $status
     * @param FromFieldReference $fromField
     * @param MessageContent $content
     * @param RssNewsletterSendSettings $sendSettings
     */
    public function __construct(
        $rssFeedUrl,
        $subject,
        StatusEnum $status,
        FromFieldReference $fromField,
        MessageContent $content,
        RssNewsletterSendSettings $sendSettings
    ) {
        $this->rssFeedUrl = $rssFeedUrl;
        $this->subject = $subject;
        $this->status = $status;
        $this->fromField = $fromField;
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
