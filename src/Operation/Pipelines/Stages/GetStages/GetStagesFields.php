<?php
namespace Getresponse\Sdk\Operation\Pipelines\Stages\GetStages;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetStagesFields extends ValueList
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
