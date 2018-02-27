<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\CustomerPermissions;

/**
 * @inheritdoc
 */
trait CustomerPermissionsTrait
{

    /**
     * @var CustomerPermissions
     *
     * @Serializer\SerializedName("customerPermissions")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\CustomerPermissions>")
     */
    private $customerPermissions;

    /**
     * @inheritdoc
     */
    public function setCustomerPermissions($customerPermissions)
    {
        $this->customerPermissions = $customerPermissions;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomerPermissions()
    {
        return $this->customerPermissions;
    }

}
