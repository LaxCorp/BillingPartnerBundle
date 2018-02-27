<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CommissionTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("commission")
     * @Serializer\Type("double")
     */
    private $commission;

    /**
     * @inheritdoc
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCommission()
    {
        return $this->commission;
    }

}
