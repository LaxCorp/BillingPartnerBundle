<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ServiceCodeTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("serviceCode")
     * @Serializer\Type("string")
     */
    private $serviceCode;

    /**
     * @inheritdoc
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

}
