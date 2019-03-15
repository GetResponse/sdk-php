<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WorkflowListElement extends BaseModel
{
    /** @var string */
    private $workflowId = self::FIELD_NOT_SET;

    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $status = self::FIELD_NOT_SET;

    /** @var string */
    private $dateStart = self::FIELD_NOT_SET;

    /** @var string */
    private $dateStop = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\WorkflowSubscriberStatistics */
    private $subscriberStatistics = self::FIELD_NOT_SET;


    /**
     * @param string $workflowId
     * @param string $name
     * @param string $status
     * @param \Getresponse\Sdk\Operation\Model\WorkflowSubscriberStatistics $subscriberStatistics
     */
    public function __construct($workflowId, $name, $status, WorkflowSubscriberStatistics $subscriberStatistics)
    {
        $this->workflowId = $workflowId;
        $this->name = $name;
        $this->status = $status;
        $this->subscriberStatistics = $subscriberStatistics;
    }


    /**
     * @param string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }


    /**
     * @param string $dateStop
     */
    public function setDateStop($dateStop)
    {
        $this->dateStop = $dateStop;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'workflowId' => $this->workflowId,
            'name' => $this->name,
            'status' => $this->status,
            'dateStart' => $this->dateStart,
            'dateStop' => $this->dateStop,
            'subscriberStatistics' => $this->subscriberStatistics,
        ];

        return $this->filterUnsetFields($data);
    }
}
