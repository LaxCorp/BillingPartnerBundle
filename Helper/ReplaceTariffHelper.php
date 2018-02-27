<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Customer;

/**
 * @inheritdoc
 */
class ReplaceTariffHelper extends BaseHelper
{

    const PATH = 'partner/management/customer/{customerId}/replaceTariff/{tariffId}';

    /**
     * @var string
     */
    public $class = Customer::class;

    /**
     * @var CustomerTariffHelper
     */
    public $customerTariffHelper;

    /**
     * @inheritdoc
     */
    public function __construct(
        RestHelper $restHelper,
        MappingHelper $mappingHelper,
        CustomerTariffHelper $customerTariffHelper
    ) {
        $this->customerTariffHelper = $customerTariffHelper;

        parent::__construct($restHelper, $mappingHelper);
    }

    /**
     * @inheritdoc
     */
    public function replace(Customer $customer, int $oldTariffId, int $newTariffId, $autoRenewal=true, $multilier=null)
    {
        $customerTariff = $this->customerTariffHelper->getDefaultByTemplateTariffId($newTariffId);
        $customerTariff->setAutoRenewal($autoRenewal);
        $customerTariff->setMultiplier($multilier);

        return $this->create($customerTariff, [
            'customerId' => $customer->getId(),
            'tariffId' => $oldTariffId
        ]);
    }

}