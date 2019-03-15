<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetPredefinedFieldsSortParams extends SortParams
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
