<?php

namespace LaxCorp\BillingPartnerBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
class AccountRefill
{

    use Traits\AmountTrait;
    use Traits\ReasonTrait;
    use Traits\CommissionTrait;
    use Traits\DescriptionTrait;
    use Traits\KindTrait;

    /**
     * @var int
     * @Serializer\SerializedName("customerId")
     * @Serializer\Type("integer")
     */
    private $customerId;

    /**
     * @inheritdoc
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @inheritdoc
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

}