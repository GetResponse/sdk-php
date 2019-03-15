<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactActivity extends BaseModel
{
    /** @var string */
    private $activity = self::FIELD_NOT_SET;

    /** @var string */
    private $subject = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var string */
    private $previewUrl = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\ContactActivityResource */
    private $resource = self::FIELD_NOT_SET;


    /**
     * @param string $activity
     * @param string $subject
     * @param string $createdOn
     * @param \Getresponse\Sdk\Operation\Model\ContactActivityResource $resource
     */
    public function __construct($activity, $subject, $createdOn, ContactActivityResource $resource)
    {
        $this->activity = $activity;
        $this->subject = $subject;
        $this->createdOn = $createdOn;
        $this->resource = $resource;
    }


    /**
     * @param string $previewUrl
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'activity' => $this->activity,
            'subject' => $this->subject,
            'createdOn' => $this->createdOn,
            'previewUrl' => $this->previewUrl,
            'resource' => $this->resource,
        ];

        return $this->filterUnsetFields($data);
    }
}
