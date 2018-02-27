<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Customer;

/**
 * @inheritdoc
 */
trait CustomerTrait
{

    /**
     * @var Customer
     *
     * @Serializer\SerializedName("customer")
     * @Serializer\Type(Customer::class)
     */
    private $customer;

    /**
     * @inheritdoc
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomer()
    {
        return $this->customer;
    }

}
