<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TariffBillingPeriodTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("tariffBillingPeriod")
     * @Serializer\Type("string")
     */
    private $tariffBillingPeriod;

    /**
     * @inheritdoc
     */
    public function setTariffBillingPeriod($tariffBillingPeriod)
    {
        $this->tariffBillingPeriod = $tariffBillingPeriod;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTariffBillingPeriod()
    {
        return $this->tariffBillingPeriod;
    }

}
