<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Partner;

/**
 * @inheritdoc
 */
trait PartnerTrait
{

    /**
     * @var Partner
     *
     * @Serializer\SerializedName("partner")
     * @Serializer\Type(Partner::class)
     */
    private $partner;

    /**
     * @inheritdoc
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPartner()
    {
        return $this->partner;
    }

}
