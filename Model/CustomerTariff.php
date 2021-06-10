<?php

namespace LaxCorp\BillingPartnerBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
class CustomerTariff
{

    use Traits\IdTrait;
    use Traits\NameTrait;
    use Traits\CreatedTrait;
    use Traits\CurrencyTrait;
    use Traits\BillingPeriodTrait;
    use Traits\CustomBillingPeriodDaysTrait;
    use Traits\SubscriptionPriceTrait;
    use Traits\TypeTrait;
    use Traits\StateTrait;
    use Traits\ServiceTariffsTrait;
    use Traits\TemplatePermissionsTrait;
    use Traits\MultiplierTrait;
    use Traits\AutoRenewalTrait;
    use Traits\SubscriptionDateTrait;
    use Traits\TariffTrait;
    use Traits\ActiveTrait;
    use Traits\CustomerTariffPermissionsTrait;
    use Traits\UsingByCustomerTrait;
    use Traits\ReplacementTrait;
    use Traits\ReplaceChildTrait;
    use Traits\TarificationDateTrait;
    use Traits\ActivationDateTrait;
    use Traits\DeactivationDateTrait;
    use Traits\AcquisitionPriceTrait;

}
