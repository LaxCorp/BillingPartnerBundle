<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use LaxCorp\BillingPartnerBundle\Model\Currency;
use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CurrencyTrait
{

    /**
     * @var Currency
     *
     * @Serializer\Type(Currency::class)
     */
    private $currency;

    /**
     * @inheritdoc
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}