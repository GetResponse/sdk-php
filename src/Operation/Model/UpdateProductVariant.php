<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateProductVariant extends BaseModel
{
    /** @var string */
    private $name = self::FIELD_NOT_SET;

    /** @var string */
    private $url = self::FIELD_NOT_SET;

    /** @var string */
    private $sku = self::FIELD_NOT_SET;

    /** @var float */
    private $price = self::FIELD_NOT_SET;

    /** @var float */
    private $priceTax = self::FIELD_NOT_SET;

    /** @var float */
    private $previousPrice = self::FIELD_NOT_SET;

    /** @var float */
    private $previousPriceTax = self::FIELD_NOT_SET;

    /** @var int */
    private $quantity = self::FIELD_NOT_SET;

    /** @var int */
    private $position = self::FIELD_NOT_SET;

    /** @var string */
    private $barcode = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var string */
    private $description = self::FIELD_NOT_SET;

    /** @var NewProductVariantImage[] */
    private $images = self::FIELD_NOT_SET;

    /** @var NewMetaField[] */
    private $metaFields = self::FIELD_NOT_SET;

    /** @var NewTax[] */
    private $taxes = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }


    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @param float $priceTax
     */
    public function setPriceTax($priceTax)
    {
        $this->priceTax = $priceTax;
    }


    /**
     * @param float $previousPrice
     */
    public function setPreviousPrice($previousPrice)
    {
        $this->previousPrice = $previousPrice;
    }


    /**
     * @param float $previousPriceTax
     */
    public function setPreviousPriceTax($previousPriceTax)
    {
        $this->previousPriceTax = $previousPriceTax;
    }


    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }


    /**
     * @param string $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @param NewProductVariantImage[] $images
     */
    public function setImages(array $images)
    {
        $this->images = $images;
    }


    /**
     * @param NewMetaField[] $metaFields
     */
    public function setMetaFields(array $metaFields)
    {
        $this->metaFields = $metaFields;
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
            'name' => $this->name,
            'url' => $this->url,
            'sku' => $this->sku,
            'price' => $this->price,
            'priceTax' => $this->priceTax,
            'previousPrice' => $this->previousPrice,
            'previousPriceTax' => $this->previousPriceTax,
            'quantity' => $this->quantity,
            'position' => $this->position,
            'barcode' => $this->barcode,
            'externalId' => $this->externalId,
            'description' => $this->description,
            'images' => $this->images,
            'metaFields' => $this->metaFields,
            'taxes' => $this->taxes,
        ];

        return $this->filterUnsetFields($data);
    }
}
