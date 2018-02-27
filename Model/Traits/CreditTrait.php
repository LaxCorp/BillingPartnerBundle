<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CreditTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("credit")
     * @Serializer\Type("double")
     */
    private $credit;

    /**
     * @inheritdoc
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCredit()
    {
        return $this->credit;
    }

}
