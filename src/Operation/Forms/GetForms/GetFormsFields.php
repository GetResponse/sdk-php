<?php
namespace Getresponse\Sdk\Operation\Forms\GetForms;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetFormsFields extends ValueList
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
        ];
    }
}
