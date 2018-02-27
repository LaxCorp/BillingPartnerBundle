<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait MultiplierTrait
{

    /**
     * @var string
     *
     * @Serializer\Type("integer")
     */
    private $multiplier;

    /**
     * @inheritdoc
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getMultiplier()
    {
        return $this->multiplier;
    }
}