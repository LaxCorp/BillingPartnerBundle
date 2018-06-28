<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait UsingByCustomerTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("usingByCustomer")
     * @Serializer\Type("boolean")
     */
    private $usingByCustomer;

    /**
     * @inheritdoc
     */
    public function setIsUsingByCustomer($usingByCustomer)
    {
        $this->usingByCustomer = $usingByCustomer;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getusingByCustomer()
    {
        return $this->usingByCustomer;
    }

}
