<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\AcquisitionFeePaid;

/**
 * @inheritdoc
 */
trait AcquisitionFeePaidTrait
{

    /**
     * @var AcquisitionFeePaid[]
     *
     * @Serializer\SerializedName("acquisitionFeePaid")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\AcquisitionFeePaid>")
     */
    private $acquisitionFeePaid;

    /**
     * @inheritdoc
     */
    public function setAcquisitionFeePaid($acquisitionFeePaid)
    {
        $this->acquisitionFeePaid = $acquisitionFeePaid;

        return $this;
    }

    /**
     * @return AcquisitionFeePaid[]
     */
    public function getAcquisitionFeePaid()
    {
        return $this->acquisitionFeePaid;
    }

}
