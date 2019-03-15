<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedField;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetPredefinedFieldFields extends ValueList
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
