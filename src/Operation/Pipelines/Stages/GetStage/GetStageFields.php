<?php
namespace Getresponse\Sdk\Operation\Pipelines\Stages\GetStage;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetStageFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'stageId',
            'type',
            'position',
            'name',
            'href',
        ];
    }
}
