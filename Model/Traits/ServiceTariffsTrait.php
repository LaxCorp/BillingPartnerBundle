<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\ServiceTariffs;

/**
 * @inheritdoc
 */
trait ServiceTariffsTrait
{

    /**
     * @var ServiceTariffs[]
     *
     * @Serializer\SerializedName("serviceTariffs")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\ServiceTariffs>")
     */
    private $serviceTariffs;

    /**
     * @inheritdoc
     */
    public function setServiceTariffs($serviceTariffs)
    {
        $this->serviceTariffs = $serviceTariffs;

        return $this;
    }

    /**
     * @return ServiceTariffs[]
     */
    public function getServiceTariffs()
    {
        return $this->serviceTariffs;
    }

}
