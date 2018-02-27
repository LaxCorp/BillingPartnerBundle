<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class TemplateTariff
{

    use Traits\IdTrait;
    use Traits\NameTrait;
    use Traits\CreatedTrait;
    use Traits\CurrencyTrait;
    use Traits\BillingPeriodTrait;
    use Traits\SubscriptionPriceTrait;
    use Traits\TypeTrait;
    use Traits\StateTrait;
    use Traits\ServiceTariffsTrait;

}
