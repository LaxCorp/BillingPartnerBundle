<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Operations;

/**
 * @inheritdoc
 */
trait OperationsTrait
{

    /**
     * @var Operations
     *
     * @Serializer\SerializedName("operations")
     * @Serializer\Type("array<LaxCorp\BillingPartnerBundle\Model\Operations>")
     */
    private $operations;

    /**
     * @inheritdoc
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getOperations()
    {
        return $this->operations;
    }

}
