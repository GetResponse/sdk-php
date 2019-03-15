<?php
namespace Getresponse\Sdk\Operation\Pipelines\GetPipelines;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetPipelinesSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'name',
        ];
    }
}
