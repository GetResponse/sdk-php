<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountBilling extends BaseModel
{
    /** @var string */
    private $listSize = self::FIELD_NOT_SET;

    /** @var string */
    private $paymentPlan = self::FIELD_NOT_SET;

    /** @var string */
    private $subscriptionPrice = self::FIELD_NOT_SET;

    /** @var string */
    private $renewalDate = self::FIELD_NOT_SET;

    /** @var string */
    private $currencyCode = self::FIELD_NOT_SET;

    /** @var string */
    private $accountBalance = self::FIELD_NOT_SET;

    /** @var string */
    private $price = self::FIELD_NOT_SET;

    /** @var string */
    private $paymentMethod = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\AccountBillingCreditCard */
    private $creditCard = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\AccountBillingAddOn[] */
    private $addons = self::FIELD_NOT_SET;


    /**
     * @param string $listSize
     */
    public function setListSize($listSize)
    {
        $this->listSize = $listSize;
    }


    /**
     * @param string $paymentPlan
     */
    public function setPaymentPlan($paymentPlan)
    {
        $this->paymentPlan = $paymentPlan;
    }


    /**
     * @param string $subscriptionPrice
     */
    public function setSubscriptionPrice($subscriptionPrice)
    {
        $this->subscriptionPrice = $subscriptionPrice;
    }


    /**
     * @param string $renewalDate
     */
    public function setRenewalDate($renewalDate)
    {
        $this->renewalDate = $renewalDate;
    }


    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }


    /**
     * @param string $accountBalance
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;
    }


    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @param string $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\AccountBillingCreditCard $creditCard
     */
    public function setCreditCard(AccountBillingCreditCard $creditCard)
    {
        $this->creditCard = $creditCard;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\AccountBillingAddOn[] $addons
     */
    public function setAddons(array $addons)
    {
        $this->addons = $addons;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'listSize' => $this->listSize,
            'paymentPlan' => $this->paymentPlan,
            'subscriptionPrice' => $this->subscriptionPrice,
            'renewalDate' => $this->renewalDate,
            'currencyCode' => $this->currencyCode,
            'accountBalance' => $this->accountBalance,
            'price' => $this->price,
            'paymentMethod' => $this->paymentMethod,
            'creditCard' => $this->creditCard,
            'addons' => $this->addons,
        ];

        return $this->filterUnsetFields($data);
    }
}
