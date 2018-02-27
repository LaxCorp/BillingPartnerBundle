<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait Service_idTrait
{

    /**
     * @var int
     * @Serializer\SerializedName("service_id")
     * @Serializer\Type("integer")
     */
    private $service_id;

    /**
     * @inheritdoc
     */
    public function getService_id()
    {
        return $this->service_id;
    }

    /**
     * @inheritdoc
     */
    public function setService_id($service_id)
    {
        $this->service_id = $service_id;

        return $this;
    }
}