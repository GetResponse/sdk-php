<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewSelectedProductVariant extends BaseModel
{
    /** @var string */
    private $variantId;

    /** @var float */
    private $price;

    /** @var float */
    private $priceTax = self::FIELD_NOT_SET;

    /** @var int */
    private $quantity;

    /** @var NewTax[] */
    private $taxes = self::FIELD_NOT_SET;


    /**
     * @param string $variantId
     * @param float $price
     * @param int $quantity
     */
    public function __construct($variantId, $price, $quantity)
    {
        $this->variantId = $variantId;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    /**
     * @param float $priceTax
     */
    public function setPriceTax($priceTax)
    {
        $this->priceTax = $priceTax;
    }


    /**
     * @param NewTax[] $taxes
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'variantId' => $this->variantId,
            'price' => $this->price,
            'priceTax' => $this->priceTax,
            'quantity' => $this->quantity,
            'taxes' => $this->taxes,
        ];

        return $this->filterUnsetFields($data);
    }
}
