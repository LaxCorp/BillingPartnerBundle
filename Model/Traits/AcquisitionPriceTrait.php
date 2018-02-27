<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AcquisitionPriceTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("acquisitionPrice")
     * @Serializer\Type("double")
     */
    private $acquisitionPrice;

    /**
     * @inheritdoc
     */
    public function setAcquisitionPrice($acquisitionPrice)
    {
        $this->acquisitionPrice = $acquisitionPrice;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAcquisitionPrice()
    {
        return $this->acquisitionPrice;
    }

}
