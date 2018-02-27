<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Permissions;

/**
 * @inheritdoc
 */
trait PermissionsTrait
{

    /**
     * @var Permissions
     *
     * @Serializer\SerializedName("permissions")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\Permissions>")
     */
    private $permissions;

    /**
     * @inheritdoc
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

}
