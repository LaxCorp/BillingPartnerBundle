<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait UnlimitedTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("unlimited")
     * @Serializer\Type("boolean")
     */
    private $unlimited;

    /**
     * @inheritdoc
     */
    public function setUnlimited($unlimited)
    {
        $this->unlimited = $unlimited;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getUnlimited()
    {
        return $this->unlimited;
    }

}
