<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 *
 */
trait ThrottleLimitTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("throttleLimit")
     * @Serializer\Type("integer")
     */
    private $throttleLimit;

    /**
     * @inheritdoc
     */
    public function getThrottleLimit()
    {
        return $this->throttleLimit;
    }

    /**
     * @inheritdoc
     */
    public function setThrottleLimit($throttleLimit)
    {
        $this->throttleLimit = $throttleLimit;

        return $this;
    }
}
