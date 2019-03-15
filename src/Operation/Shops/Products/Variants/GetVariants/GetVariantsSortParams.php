<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\SortParams;

class GetVariantsSortParams extends SortParams
{
    /**
     * @return array
     */
    public function getAllowedKeys()
    {
        return [
            'createdOn',
        ];
    }
}
