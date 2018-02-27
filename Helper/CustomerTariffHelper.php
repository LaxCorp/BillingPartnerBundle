<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Customer;
use LaxCorp\BillingPartnerBundle\Model\CustomerTariffs;
use LaxCorp\BillingPartnerBundle\Model\TemplateTariff;

/**
 * @inheritdoc
 */
class CustomerTariffHelper extends BaseHelper
{

    const PATH = 'partner/management/customer/{customerId}/customertariff';

    /**
     * @var string
     */
    public $class = CustomerTariffs::class;

    /**
     * @var CustomerHelper
     */
    public $customerHelper;

    /**
     * @var TemplateTariffHelper
     */
    public $templateTariffHelper;

    /**
     * @inheritdoc
     */
    public function __construct(
        RestHelper $restHelper,
        MappingHelper $mappingHelper,
        CustomerHelper $customerHelper,
        TemplateTariffHelper $templateTariffHelper
    ) {
        $this->customerHelper       = $customerHelper;
        $this->templateTariffHelper = $templateTariffHelper;

        parent::__construct($restHelper, $mappingHelper);
    }

    /**
     * @param Customer                         $customer
     * @param int|CustomerTariffs|object|array $mixed
     *
     * @return CustomerTariffs|null
     */
    public function getCustomerTariff(Customer $customer, $mixed)
    {
        $customerTariffId = $this->idResolver($mixed);
        $customerTariffs  = $customer->getCustomerTariffs();

        foreach ($customerTariffs as $item) {
            if ($item->getId() === $customerTariffId) {
                return $item;
            }
        }

        return null;
    }

    /**
     * @param Customer        $customer
     * @param CustomerTariffs $customerTariff
     *
     * @return CustomerTariffs
     */
    public function updateCustomerTariff(Customer $customer, CustomerTariffs $customerTariff)
    {
        $customerTariffId = $this->idResolver($customerTariff);
        $customerTariffs  = $customer->getCustomerTariffs();

        foreach ($customerTariffs as $key => $item) {
            if ($item->getId() === $customerTariffId) {
                $customerTariffs[$key] = $customerTariff;
                $customer->setCustomerTariffs($customerTariffs);
                $this->customerHelper->updateCustomer($customer);
                break;
            }
        }

        return $customerTariff;
    }

    /**
     * @param Customer        $customer
     * @param CustomerTariffs $customerTariff
     *
     * @return null|object|Customer
     */
    public function createCustomerTariff(Customer $customer, CustomerTariffs $customerTariff)
    {
        return $this->create($customerTariff, ['customerId' => $customer->getId()], Customer::class);
    }

    /**
     * @param Customer        $customer
     * @param CustomerTariffs $customerTariff
     *
     * @return array|object
     */
    public function deleteCustomerTariff(Customer $customer, CustomerTariffs $customerTariff)
    {
        return $this->delete($customerTariff, ['customerId' => $customer->getId()]);
    }

    /**
     * @param TemplateTariff $templateTariff
     *
     * @return CustomerTariffs
     */
    public function getDefault(TemplateTariff $templateTariff)
    {
        $customerTariff = new CustomerTariffs();
        $customerTariff->setTariff($templateTariff);
        $customerTariff->setActivationDate(new \DateTime());

        return $customerTariff;
    }

    /**
     * @param int $templateTariffId
     *
     * @return CustomerTariffs
     */
    public function getDefaultByTemplateTariffId(int $templateTariffId)
    {
        $templateTariff = $this->templateTariffHelper->getTemplateTariff($templateTariffId);

        return $this->getDefault($templateTariff);
    }

}