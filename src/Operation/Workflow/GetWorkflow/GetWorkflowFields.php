<?php
namespace Getresponse\Sdk\Operation\Workflow\GetWorkflow;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetWorkflowFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'workflowId',
            'name',
            'status',
            'dateStart',
            'dateStop',
            'subscriberStatistics',
        ];
    }
}
