<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class AccountOperation
{

    use Traits\IdTrait;
    use Traits\AccountTrait;
    use Traits\CustomerTrait;
    use Traits\TariffNameTrait;
    use Traits\TariffAcquisitionPriceTrait;
    use Traits\TariffSubscriptionPriceTrait;
    use Traits\TariffBillingPeriodTrait;
    use Traits\ClicksCountTrait;
    use Traits\CreatedTrait;
    use Traits\ClosedTrait;
    use Traits\KindTrait;
    use Traits\ReasonTrait;
    use Traits\AmountTrait;
    use Traits\CommissionTrait;
    use Traits\MultiplierTrait;
    use Traits\DescriptionTrait;

}
