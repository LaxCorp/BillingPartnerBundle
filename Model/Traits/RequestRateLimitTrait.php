<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait RequestRateLimitTrait
{

    /**
     * @var integer
     *
     * @Serializer\SerializedName("requestRateLimit")
     * @Serializer\Type("integer")
     */
    private $requestRateLimit;

    /**
     * @inheritdoc
     */
    public function setRequestRateLimit($requestRateLimit)
    {
        $this->requestRateLimit = $requestRateLimit;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getRequestRateLimit()
    {
        return $this->requestRateLimit;
    }

}
