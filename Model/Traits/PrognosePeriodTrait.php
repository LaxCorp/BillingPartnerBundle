<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait PrognosePeriodTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("prognosePeriod")
     * @Serializer\Type("integer")
     */
    private $prognosePeriod;

    /**
     * @inheritdoc
     */
    public function setPrognosePeriod($prognosePeriod)
    {
        $this->prognosePeriod = $prognosePeriod;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPrognosePeriod()
    {
        return $this->prognosePeriod;
    }

}
