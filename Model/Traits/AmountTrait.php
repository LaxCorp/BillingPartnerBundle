<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AmountTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("amount")
     * @Serializer\Type("double")
     */
    private $amount;

    /**
     * @inheritdoc
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAmount()
    {
        return $this->amount;
    }

}
