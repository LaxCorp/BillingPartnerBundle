<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait DeferredPaymentPeriodTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("deferredPaymentPeriod")
     * @Serializer\Type("integer")
     */
    private $deferredPaymentPeriod;

    /**
     * @inheritdoc
     */
    public function setDeferredPaymentPeriod($deferredPaymentPeriod)
    {
        $this->deferredPaymentPeriod = $deferredPaymentPeriod;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDeferredPaymentPeriod()
    {
        return $this->deferredPaymentPeriod;
    }

}
