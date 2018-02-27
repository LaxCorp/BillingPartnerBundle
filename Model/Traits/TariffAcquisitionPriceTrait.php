<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TariffAcquisitionPriceTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("tariffAcquisitionPrice")
     * @Serializer\Type("double")
     */
    private $tariffAcquisitionPrice;

    /**
     * @inheritdoc
     */
    public function setTariffAcquisitionPrice($tariffAcquisitionPrice)
    {
        $this->tariffAcquisitionPrice = $tariffAcquisitionPrice;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTariffAcquisitionPrice()
    {
        return $this->tariffAcquisitionPrice;
    }

}
