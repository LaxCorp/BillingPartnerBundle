<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SubscriptionPriceTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("subscriptionPrice")
     * @Serializer\Type("double")
     */
    private $subscriptionPrice;

    /**
     * @inheritdoc
     */
    public function setSubscriptionPrice($subscriptionPrice)
    {
        $this->subscriptionPrice = $subscriptionPrice;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSubscriptionPrice()
    {
        return $this->subscriptionPrice;
    }

}
