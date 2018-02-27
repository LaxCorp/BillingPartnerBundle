<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\CustomerTariffs;

/**
 * @inheritdoc
 */
trait CustomerTariffsTrait
{

    /**
     * @var CustomerTariffs[]
     *
     * @Serializer\SerializedName("customerTariffs")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\CustomerTariffs>")
     */
    private $customerTariffs;

    /**
     * @inheritdoc
     */
    public function setCustomerTariffs($customerTariffs)
    {
        $this->customerTariffs = $customerTariffs;

        return $this;
    }

    /**
     * @return CustomerTariffs[]
     */
    public function getCustomerTariffs()
    {
        return $this->customerTariffs;
    }

}
