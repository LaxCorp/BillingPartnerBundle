<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 *
 */
trait OperationGroupIdTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("operationGroupId")
     * @Serializer\Type("integer")
     */
    private $operationGroupId;

    /**
     * @inheritdoc
     */
    public function getOperationGroupId()
    {
        return $this->operationGroupId;
    }

    /**
     * @inheritdoc
     */
    public function setOperationGroupId($operationGroupId)
    {
        $this->operationGroupId = $operationGroupId;

        return $this;
    }
}
