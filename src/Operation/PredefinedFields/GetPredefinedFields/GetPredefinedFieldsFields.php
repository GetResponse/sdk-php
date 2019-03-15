<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetPredefinedFieldsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'predefinedFieldId',
            'href',
            'name',
            'value',
            'campaign',
        ];
    }
}
