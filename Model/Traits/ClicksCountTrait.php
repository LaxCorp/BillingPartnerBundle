<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ClicksCountTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("clicksCount")
     * @Serializer\Type("integer")
     */
    private $clicksCount;

    /**
     * @inheritdoc
     */
    public function setClicksCount($clicksCount)
    {
        $this->clicksCount = $clicksCount;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getClicksCount()
    {
        return $this->clicksCount;
    }

}
