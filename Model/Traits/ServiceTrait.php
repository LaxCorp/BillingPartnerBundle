<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Service;

/**
 * @inheritdoc
 */
trait ServiceTrait
{

    /**
     * @var Service
     *
     * @Serializer\SerializedName("service")
     * @Serializer\Type(Service::class)
     */
    private $service;

    /**
     * @inheritdoc
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getService()
    {
        return $this->service;
    }

}
