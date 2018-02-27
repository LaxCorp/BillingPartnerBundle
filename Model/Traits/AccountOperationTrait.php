<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\AccountOperation;

/**
 * @inheritdoc
 */
trait AccountOperationTrait
{

    /**
     * @var AccountOperation
     *
     * @Serializer\SerializedName("accountOperation")
     * @Serializer\Type(AccountOperation::class)
     */
    private $accountOperation;

    /**
     * @inheritdoc
     */
    public function setAccountOperation($accountOperation)
    {
        $this->accountOperation = $accountOperation;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAccountOperation()
    {
        return $this->accountOperation;
    }

}
