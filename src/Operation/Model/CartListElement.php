<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CartListElement extends BaseModel
{
    /** @var string */
    private $cartId = self::FIELD_NOT_SET;

    /** @var string */
    private $contactId = self::FIELD_NOT_SET;

    /** @var string */
    private $currency = self::FIELD_NOT_SET;

    /** @var string */
    private $totalPrice = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\CartSelectedVariants[] */
    private $selectedVariants = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var string */
    private $totalTaxPrice = self::FIELD_NOT_SET;

    /** @var string */
    private $cartUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $href = self::FIELD_NOT_SET;

    /** @var string */
    private $createdOn = self::FIELD_NOT_SET;

    /** @var string */
    private $updatedOn = self::FIELD_NOT_SET;


    /**
     * @param string $cartId
     * @param string $contactId
     * @param string $currency
     * @param string $totalPrice
     * @param \Getresponse\Sdk\Operation\Model\CartSelectedVariants[] $selectedVariants
     * @param string $href
     * @param string $createdOn
     * @param string $updatedOn
     */
    public function __construct($cartId, $contactId, $currency, $totalPrice, array $selectedVariants, $href, $createdOn, $updatedOn)
    {
        $this->cartId = $cartId;
        $this->contactId = $contactId;
        $this->currency = $currency;
        $this->totalPrice = $totalPrice;
        $this->selectedVariants = $selectedVariants;
        $this->href = $href;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param string $totalTaxPrice
     */
    public function setTotalTaxPrice($totalTaxPrice)
    {
        $this->totalTaxPrice = $totalTaxPrice;
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
            'cartId' => $this->cartId,
            'contactId' => $this->contactId,
            'currency' => $this->currency,
            'totalPrice' => $this->totalPrice,
            'selectedVariants' => $this->selectedVariants,
            'externalId' => $this->externalId,
            'totalTaxPrice' => $this->totalTaxPrice,
            'cartUrl' => $this->cartUrl,
            'href' => $this->href,
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
