<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillingPeriodTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("billingPeriod")
     * @Serializer\Type("string")
     */
    private $billingPeriod;

    /**
     * @inheritdoc
     */
    public function setBillingPeriod($billingPeriod)
    {
        $this->billingPeriod = $billingPeriod;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBillingPeriod()
    {
        return $this->billingPeriod;
    }

}
