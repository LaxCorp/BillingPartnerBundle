<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Version;

/**
 * @inheritdoc
 */
class Test
{

    /**
     * @var VersionHelper
     */
    private $versionHelper;

    /**
     * @inheritdoc
     */
    public function __construct(VersionHelper $versionHelper)
    {
        $this->versionHelper = $versionHelper;
    }

    /**
     * @inheritdoc
     */
    public function isValid()
    {
        $billing = $this->versionHelper->getVersion();

        if($billing instanceof Version && $billing->getVersion()){
            return true;
        }

        return false;
    }

}