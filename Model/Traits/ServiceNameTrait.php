<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServiceNameTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("serviceName")
     * @Serializer\Type("string")
     */
    private $serviceName;

    /**
     * @inheritdoc
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

}
