<?php
namespace Getresponse\Sdk\Operation\Workflow\UpdateWorkflow;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateWorkflow as ModelUpdateWorkflow;

class UpdateWorkflow extends CommandOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/workflow/{workflowId}';

    /** @var ModelUpdateWorkflow */
    protected $data;

    /** @var string */
    private $workflowId;


    /**
     * @param ModelUpdateWorkflow $data
     * @param string $workflowId
     */
    public function __construct(ModelUpdateWorkflow $data, $workflowId)
    {
        $this->data = $data;
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
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 200;
    }
}
