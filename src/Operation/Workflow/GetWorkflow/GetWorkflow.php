<?php
namespace Getresponse\Sdk\Operation\Workflow\GetWorkflow;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetWorkflow extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/workflow/{workflowId}';

    /** @var string */
    private $workflowId;

    /** @var GetWorkflowFields */
    private $fields;


    /**
     * @param string $workflowId
     */
    public function __construct($workflowId)
    {
        $this->workflowId = $workflowId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{workflowId}'],
            [$this->workflowId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetWorkflowFields $fields
     * @return $this
     */
    public function setFields(GetWorkflowFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
