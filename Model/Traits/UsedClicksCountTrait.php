<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait UsedClicksCountTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("usedClicksCount")
     * @Serializer\Type("integer")
     */
    private $usedClicksCount;

    /**
     * @inheritdoc
     */
    public function getUsedClicksCount()
    {
        return $this->usedClicksCount;
    }

    /**
     * @inheritdoc
     */
    public function setUsedClicksCount($usedClicksCount)
    {
        $this->usedClicksCount = $usedClicksCount;

        return $this;
    }
}