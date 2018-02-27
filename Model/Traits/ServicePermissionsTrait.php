<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\ServicePermissions;

/**
 * @inheritdoc
 */
trait ServicePermissionsTrait
{

    /**
     * @var ServicePermissions
     *
     * @Serializer\SerializedName("servicePermissions")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\ServicePermissions>")
     */
    private $servicePermissions;

    /**
     * @inheritdoc
     */
    public function setServicePermissions($servicePermissions)
    {
        $this->servicePermissions = $servicePermissions;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getServicePermissions()
    {
        return $this->servicePermissions;
    }

}
