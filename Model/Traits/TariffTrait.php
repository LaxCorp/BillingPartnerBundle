<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\TemplateTariff;

/**
 * @inheritdoc
 */
trait TariffTrait
{

    /**
     * @var TemplateTariff
     *
     * @Serializer\SerializedName("tariff")
     * @Serializer\Type(TemplateTariff::class)
     */
    private $tariff;

    /**
     * @inheritdoc
     */
    public function setTariff($tariff)
    {
        $this->tariff = $tariff;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTariff()
    {
        return $this->tariff;
    }

}
