<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait FullAccessTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("fullAccess")
     * @Serializer\Type("boolean")
     */
    private $fullAccess;

    /**
     * @inheritdoc
     */
    public function setFullAccess($fullAccess)
    {
        $this->fullAccess = $fullAccess;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getFullAccess()
    {
        return $this->fullAccess;
    }

}
