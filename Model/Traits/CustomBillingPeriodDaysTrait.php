<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CustomBillingPeriodDaysTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("customBillingPeriodDays")
     * @Serializer\Type("integer")
     */
    private $customBillingPeriodDays;

    /**
     * @inheritdoc
     */
    public function setCustomBillingPeriodDays($customBillingPeriodDays)
    {
        $this->customBillingPeriodDays = $customBillingPeriodDays;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomBillingPeriodDays()
    {
        return $this->customBillingPeriodDays;
    }

}
