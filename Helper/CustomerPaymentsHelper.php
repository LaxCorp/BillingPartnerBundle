<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Customer;
use LaxCorp\BillingPartnerBundle\Model\CustomerPayments;

/**
 * @inheritdoc
 */
class CustomerPaymentsHelper extends BaseHelper
{

    const PATH = 'partner/management/customer/{customerId}/payments';

    /**
     * @var string
     */
    public $class = CustomerPayments::class;

    /**
     * @inheritdoc
     */
    public function getCustomerPayments(Customer $customer, int $periodMills)
    {
        $pathVars  = ['customerId' => $customer->getId()];

        $path = $this->pathParser($this::PATH, $pathVars) . '/' . $periodMills;

        $json = $this->restHelper->getJson($path);

        return $this->mappingHelper->deserialize($json, 'ArrayCollection<' . $this->class . '>');
    }

}