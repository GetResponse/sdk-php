<?php
namespace Getresponse\Sdk\Operation\Pipelines\GetPipeline;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetPipelineFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'pipelineId',
            'name',
            'href',
            'stages',
        ];
    }
}
