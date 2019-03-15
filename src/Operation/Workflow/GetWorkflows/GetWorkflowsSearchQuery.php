<?php
namespace Getresponse\Sdk\Operation\Workflow\GetWorkflows;

use Getresponse\Sdk\Client\Operation\DateRangeSearch;
use Getresponse\Sdk\Client\Operation\SearchQuery;

class GetWorkflowsSearchQuery extends SearchQuery
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
        ];
    }
}
