<?php

namespace LaxCorp\BillingPartnerBundle\Model;

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