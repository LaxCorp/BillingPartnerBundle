<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\TemplatePermission;

/**
 * @inheritdoc
 */
trait TemplatePermissionsTrait
{

    /**
     * @var TemplatePermission
     *
     * @Serializer\SerializedName("templatePermissions")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\TemplatePermission>")
     */
    private $templatePermission;

    /**
     * @inheritdoc
     */
    public function setTemplatePermissions($customerTariff)
    {
        $this->templatePermission = $customerTariff;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTemplatePermissions()
    {
        return $this->templatePermission;
    }

}
