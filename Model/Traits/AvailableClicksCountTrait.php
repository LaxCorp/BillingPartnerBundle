<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AvailableClicksCountTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("availableClicksCount")
     * @Serializer\Type("integer")
     */
    private $availableClicksCount;

    /**
     * @inheritdoc
     */
    public function getAvailableClicksCount()
    {
        return $this->availableClicksCount;
    }

    /**
     * @inheritdoc
     */
    public function setAvailableClicksCount($availableClicksCount)
    {
        $this->availableClicksCount = $availableClicksCount;

        return $this;
    }
}