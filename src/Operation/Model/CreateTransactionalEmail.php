<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CreateTransactionalEmail extends BaseModel
{
    /** @var FromFieldReference */
    private $fromField;

    /** @var FromFieldReference */
    private $replyTo = self::FIELD_NOT_SET;

    /** @var string */
    private $subject;

    /** @var NewTransactionalEmailTag */
    private $tag = self::FIELD_NOT_SET;

    /** @var TransactionalEmailContent */
    private $content;

    /** @var TransactionalEmailRecipients */
    private $recipients;

    /** @var TransactionalEmailAttachment[] */
    private $attachments = self::FIELD_NOT_SET;


    /**
     * @param FromFieldReference $fromField
     * @param string $subject
     * @param TransactionalEmailContent $content
     * @param TransactionalEmailRecipients $recipients
     */
    public function __construct(
        FromFieldReference $fromField,
        $subject,
        TransactionalEmailContent $content,
        TransactionalEmailRecipients $recipients
    ) {
        $this->fromField = $fromField;
        $this->subject = $subject;
        $this->content = $content;
        $this->recipients = $recipients;
    }


    /**
     * @param FromFieldReference $replyTo
     */
    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    /**
     * @param NewTransactionalEmailTag $tag
     */
    public function setTag(NewTransactionalEmailTag $tag)
    {
        $this->tag = $tag;
    }


    /**
     * @param TransactionalEmailAttachment[] $attachments
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
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'subject' => $this->subject,
            'tag' => $this->tag,
            'content' => $this->content,
            'recipients' => $this->recipients,
            'attachments' => $this->attachments,
        ];

        return $this->filterUnsetFields($data);
    }
}
