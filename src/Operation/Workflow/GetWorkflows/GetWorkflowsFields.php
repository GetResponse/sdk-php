<?php
namespace Getresponse\Sdk\Operation\Workflow\GetWorkflows;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetWorkflowsFields extends ValueList
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
