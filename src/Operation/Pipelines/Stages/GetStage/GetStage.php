<?php
namespace Getresponse\Sdk\Operation\Pipelines\Stages\GetStage;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetStage extends QueryOperation
{
    use OperationVersionTrait;

    const METHOD_URL = '/v3/pipelines/{pipelineId}/stages/{pipelineStageId}';

    /** @var string */
    private $pipelineId;

    /** @var string */
    private $pipelineStageId;

    /** @var GetStageFields */
    private $fields;


    /**
     * @param string $pipelineId
     * @param string $pipelineStageId
     */
    public function __construct($pipelineId, $pipelineStageId)
    {
        $this->pipelineId = $pipelineId;
        $this->pipelineStageId = $pipelineStageId;
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{pipelineId}', '{pipelineStageId}'],
            [$this->pipelineId, $this->pipelineStageId],
            self::METHOD_URL
        );
    }


    /**
     * @param GetStageFields $fields
     * @return $this
     */
    public function setFields(GetStageFields $fields)
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
