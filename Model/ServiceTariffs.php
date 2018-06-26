<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class ServiceTariffs
{

    use Traits\IdTrait;
    use Traits\ServiceTrait;
    use Traits\UnlimitedTrait;
    use Traits\OveruseClickPriceTrait;
    use Traits\AcquisitionPriceTrait;
    use Traits\BillingPeriodTrait;
    use Traits\CustomBillingPeriodDaysTrait;
    use Traits\ClicksCountTrait;
    use Traits\AvailableClicksCountTrait;
    use Traits\UsedClicksCountTrait;
    use Traits\DateTrait;

}