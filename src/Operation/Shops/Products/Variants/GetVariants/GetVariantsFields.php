<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetVariantsFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'variantId',
            'href',
            'name',
            'url',
            'sku',
            'price',
            'priceTax',
            'previousPrice',
            'previousPriceTax',
            'quantity',
            'position',
            'barcode',
            'externalId',
            'description',
            'images',
            'metaFields',
            'taxes',
            'createdOn',
            'updatedOn',
        ];
    }
}
