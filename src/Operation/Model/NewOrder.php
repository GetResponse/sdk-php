<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewOrder extends BaseModel
{
    /** @var string */
    private $contactId;

    /** @var string */
    private $orderUrl = self::FIELD_NOT_SET;

    /** @var string */
    private $externalId = self::FIELD_NOT_SET;

    /** @var float */
    private $totalPrice;

    /** @var float */
    private $totalPriceTax = self::FIELD_NOT_SET;

    /** @var string */
    private $currency;

    /** @var string */
    private $status = self::FIELD_NOT_SET;

    /** @var string */
    private $cartId = self::FIELD_NOT_SET;

    /** @var string */
    private $description = self::FIELD_NOT_SET;

    /** @var float */
    private $shippingPrice = self::FIELD_NOT_SET;

    /** @var NewAddress */
    private $shippingAddress = self::FIELD_NOT_SET;

    /** @var string */
    private $billingStatus = self::FIELD_NOT_SET;

    /** @var NewAddress */
    private $billingAddress = self::FIELD_NOT_SET;

    /** @var string */
    private $processedAt = self::FIELD_NOT_SET;

    /** @var NewSelectedProductVariant[] */
    private $selectedVariants;

    /** @var NewMetaField[] */
    private $metaFields = self::FIELD_NOT_SET;


    /**
     * @param string $contactId
     * @param float $totalPrice
     * @param string $currency
     * @param NewSelectedProductVariant[] $selectedVariants
     */
    public function __construct($contactId, $totalPrice, $currency, array $selectedVariants)
    {
        $this->contactId = $contactId;
        $this->totalPrice = $totalPrice;
        $this->currency = $currency;
        $this->selectedVariants = $selectedVariants;
    }


    /**
     * @param string $orderUrl
     */
    public function setOrderUrl($orderUrl)
    {
        $this->orderUrl = $orderUrl;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param float $totalPriceTax
     */
    public function setTotalPriceTax($totalPriceTax)
    {
        $this->totalPriceTax = $totalPriceTax;
    }


    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @param string $cartId
     */
    public function setCartId($cartId)
    {
        $this->cartId = $cartId;
    }


    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @param float $shippingPrice
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->shippingPrice = $shippingPrice;
    }


    /**
     * @param NewAddress $shippingAddress
     */
    public function setShippingAddress(NewAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }


    /**
     * @param string $billingStatus
     */
    public function setBillingStatus($billingStatus)
    {
        $this->billingStatus = $billingStatus;
    }


    /**
     * @param NewAddress $billingAddress
     */
    public function setBillingAddress(NewAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }


    /**
     * @param string $processedAt
     */
    public function setProcessedAt($processedAt)
    {
        $this->processedAt = $processedAt;
    }


    /**
     * @param NewMetaField[] $metaFields
     */
    public function setMetaFields(array $metaFields)
    {
        $this->metaFields = $metaFields;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'contactId' => $this->contactId,
            'orderUrl' => $this->orderUrl,
            'externalId' => $this->externalId,
            'totalPrice' => $this->totalPrice,
            'totalPriceTax' => $this->totalPriceTax,
            'currency' => $this->currency,
            'status' => $this->status,
            'cartId' => $this->cartId,
            'description' => $this->description,
            'shippingPrice' => $this->shippingPrice,
            'shippingAddress' => $this->shippingAddress,
            'billingStatus' => $this->billingStatus,
            'billingAddress' => $this->billingAddress,
            'processedAt' => $this->processedAt,
            'selectedVariants' => $this->selectedVariants,
            'metaFields' => $this->metaFields,
        ];

        return $this->filterUnsetFields($data);
    }
}
