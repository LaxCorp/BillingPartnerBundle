<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\OperationGroupLimit;

/**
 *
 */
trait OperationGroupLimitsTrait
{

    /**
     * @var OperationGroupLimit
     *
     * @Serializer\SerializedName("operationGroupLimits")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\OperationGroupLimit>")
     */
    private $operationGroupLimits;

    /**
     * @inheritDoc
     */
    public function setOperationGroupLimits($operationGroupLimits)
    {
        $this->operationGroupLimits = $operationGroupLimits;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOperationGroupLimits()
    {
        return $this->operationGroupLimits;
    }

}
