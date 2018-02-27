<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait PayedAmountTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("payedAmount")
     * @Serializer\Type("double")
     */
    private $payedAmount;

    /**
     * @inheritdoc
     */
    public function setPayedAmount($payedAmount)
    {
        $this->payedAmount = $payedAmount;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPayedAmount()
    {
        return $this->payedAmount;
    }

}
