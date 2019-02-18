<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\CustomerTariffPermissions;

/**
 * @inheritdoc
 */
trait CustomerTariffPermissionsTrait
{

    /**
     * @var CustomerTariffPermissions
     *
     * @Serializer\SerializedName("customerTariffPermissions")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\CustomerTariffPermissions>")
     */
    private $customerTariffPermissions;

    /**
     * @inheritdoc
     */
    public function setCustomerTariffPermissions($customerTariffPermissions)
    {
        $this->customerTariffPermissions = $customerTariffPermissions;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomerTariffPermissions()
    {
        return $this->customerTariffPermissions;
    }

}
