<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\ResourcePermissions;

/**
 * @inheritdoc
 */
trait ResourcePermissionsTrait
{

    /**
     * @var ResourcePermissions
     *
     * @Serializer\SerializedName("resourcePermissions")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\ResourcePermissions>")
     */
    private $resourcePermissions;

    /**
     * @inheritdoc
     */
    public function setResourcePermissions($resourcePermissions)
    {
        $this->resourcePermissions = $resourcePermissions;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getResourcePermissions()
    {
        return $this->resourcePermissions;
    }

}
