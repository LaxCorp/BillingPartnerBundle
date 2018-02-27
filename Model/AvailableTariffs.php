<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class AvailableTariffs
{

    use Traits\BillingPeriodTrait;
    use Traits\CreatedTrait;
    use Traits\CurrencyTrait;
    use Traits\IdTrait;
    use Traits\NameTrait;
    use Traits\ServiceTariffsTrait;
    use Traits\StateTrait;
    use Traits\SubscriptionPriceTrait;
    use Traits\TypeTrait;

}
