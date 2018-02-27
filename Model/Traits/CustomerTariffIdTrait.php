<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CustomerTariffIdTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("customerTariffId")
     * @Serializer\Type("integer")
     */
    private $customerTariffId;

    /**
     * @inheritdoc
     */
    public function getCustomerTariffId()
    {
        return $this->customerTariffId;
    }

    /**
     * @inheritdoc
     */
    public function setCustomerTariffId($customerTariffId)
    {
        $this->customerTariffId = $customerTariffId;

        return $this;
    }
}