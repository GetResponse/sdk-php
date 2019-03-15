<?php
namespace Getresponse\Sdk\Operation\Forms\GetForm;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetFormFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'formId',
            'webformId',
            'name',
            'href',
            'hasVariants',
            'scriptUrl',
            'status',
            'createdOn',
            'statistics',
            'campaign',
            'settings',
            'variants',
        ];
    }
}
