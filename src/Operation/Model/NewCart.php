<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCart extends BaseModel
{
    /** @var string */
    private $contactId;

    /** @var float */
    private $totalPrice;

    /** @var float */
    private $totalTaxPrice = self::FIELD_NOT_SET;

    /** @var string */
    private $currency;

    /** @var NewCartSelectedProductVariant[] */
    private $selectedVariants;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var string */
    private $cartUrl = self::FIELD_NOT_SET;


    /**
     * @param string $contactId
     * @param float $totalPrice
     * @param string $currency
     * @param NewCartSelectedProductVariant[] $selectedVariants
     */
    public function __construct($contactId, $totalPrice, $currency, array $selectedVariants)
    {
        $this->contactId = $contactId;
        $this->totalPrice = $totalPrice;
        $this->currency = $currency;
        $this->selectedVariants = $selectedVariants;
    }


    /**
     * @param float $totalTaxPrice
     */
    public function setTotalTaxPrice($totalTaxPrice)
    {
        $this->totalTaxPrice = $totalTaxPrice;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param string $cartUrl
     */
    public function setCartUrl($cartUrl)
    {
        $this->cartUrl = $cartUrl;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'contactId' => $this->contactId,
            'totalPrice' => $this->totalPrice,
            'totalTaxPrice' => $this->totalTaxPrice,
            'currency' => $this->currency,
            'selectedVariants' => $this->selectedVariants,
            'externalId' => $this->externalId,
            'cartUrl' => $this->cartUrl,
        ];

        return $this->filterUnsetFields($data);
    }
}
