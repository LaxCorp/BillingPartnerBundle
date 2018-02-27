<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ReasonTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("reason")
     * @Serializer\Type("string")
     */
    private $reason;

    /**
     * @inheritdoc
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getReason()
    {
        return $this->reason;
    }

}
