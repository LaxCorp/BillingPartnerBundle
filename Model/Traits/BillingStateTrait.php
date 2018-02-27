<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait BillingStateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("billingState")
     * @Serializer\Type("string")
     */
    private $billingState;

    /**
     * @inheritdoc
     */
    public function setBillingState($billingState)
    {
        $this->billingState = $billingState;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBillingState()
    {
        return $this->billingState;
    }

}
