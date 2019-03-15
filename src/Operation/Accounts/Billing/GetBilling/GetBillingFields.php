<?php
namespace Getresponse\Sdk\Operation\Accounts\Billing\GetBilling;

use Getresponse\Sdk\Client\Operation\ValueList;

class GetBillingFields extends ValueList
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'listSize',
            'paymentPlan',
            'subscriptionPrice',
            'renewalDate',
            'currencyCode',
            'accountBalance',
            'price',
            'paymentMethod',
            'creditCard',
            'addons',
        ];
    }
}
