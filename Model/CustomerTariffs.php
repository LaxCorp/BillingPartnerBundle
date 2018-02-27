<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class CustomerTariffs
{

    use Traits\IdTrait;
    use Traits\NameTrait;
    use Traits\TypeTrait;
    use Traits\CreatedTrait;
    use Traits\ActivationDateTrait;
    use Traits\TarificationDateTrait;
    use Traits\DeactivationDateTrait;
    use Traits\SubscriptionDateTrait;
    use Traits\CurrencyTrait;
    use Traits\MultiplierTrait;
    use Traits\BillingPeriodTrait;
    use Traits\AcquisitionPriceTrait;
    use Traits\SubscriptionPriceTrait;
    use Traits\StateTrait;
    use Traits\ServiceTariffsTrait;
    use Traits\AutoRenewalTrait;
    use Traits\TariffTrait;
    use Traits\ActiveTrait;
    use Traits\ReplaceChildTrait;
    use Traits\IsReplacementTrait;
    use Traits\IsUsingByCustomerTrait;

}
