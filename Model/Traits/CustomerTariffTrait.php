<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\CustomerTariff;

/**
 * @inheritdoc
 */
trait CustomerTariffTrait
{

    /**
     * @var CustomerTariff
     *
     * @Serializer\SerializedName("customerTariff")
     * @Serializer\Type(CustomerTariff::class)
     */
    private $customerTariff;

    /**
     * @inheritdoc
     */
    public function setCustomerTariff($customerTariff)
    {
        $this->customerTariff = $customerTariff;

        return $this;
    }

    /**
     * @return CustomerTariff
     */
    public function getCustomerTariff()
    {
        return $this->customerTariff;
    }

}
