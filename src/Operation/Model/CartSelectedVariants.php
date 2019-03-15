<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CartSelectedVariants extends BaseModel
{
    /** @var string */
    private $variantId = self::FIELD_NOT_SET;

    /** @var string */
    private $quantity = self::FIELD_NOT_SET;

    /** @var string */
    private $price = self::FIELD_NOT_SET;

    /** @var string */
    private $priceTax = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;


    /**
     * @param string $variantId
     * @param string $quantity
     * @param string $price
     * @param string $priceTax
     * @param string $href
     */
    public function __construct($variantId, $quantity, $price, $priceTax, $href)
    {
        $this->variantId = $variantId;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->priceTax = $priceTax;
        $this->href = $href;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'variantId' => $this->variantId,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'priceTax' => $this->priceTax,
            'href' => $this->href,
        ];

        return $this->filterUnsetFields($data);
    }
}
