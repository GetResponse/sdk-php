<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WorkflowSubscriberStatistics extends BaseModel
{
    /** @var string */
    private $completedCount = self::FIELD_NOT_SET;

    /** @var string */
    private $inProgressCount = self::FIELD_NOT_SET;


    /**
     * @param string $completedCount
     * @param string $inProgressCount
     */
    public function __construct($completedCount, $inProgressCount)
    {
        $this->completedCount = $completedCount;
        $this->inProgressCount = $inProgressCount;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'completedCount' => $this->completedCount,
            'inProgressCount' => $this->inProgressCount,
        ];

        return $this->filterUnsetFields($data);
    }
}
