<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TariffSubscriptionPriceTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("tariffSubscriptionPrice")
     * @Serializer\Type("double")
     */
    private $tariffSubscriptionPrice;

    /**
     * @inheritdoc
     */
    public function setTariffSubscriptionPrice($tariffSubscriptionPrice)
    {
        $this->tariffSubscriptionPrice = $tariffSubscriptionPrice;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTariffSubscriptionPrice()
    {
        return $this->tariffSubscriptionPrice;
    }

}
