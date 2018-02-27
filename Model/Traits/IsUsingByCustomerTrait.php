<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IsUsingByCustomerTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("isUsingByCustomer")
     * @Serializer\Type("boolean")
     */
    private $isUsingByCustomer;

    /**
     * @inheritdoc
     */
    public function setIsUsingByCustomer($isUsingByCustomer)
    {
        $this->isUsingByCustomer = $isUsingByCustomer;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getIsUsingByCustomer()
    {
        return $this->isUsingByCustomer;
    }

}
