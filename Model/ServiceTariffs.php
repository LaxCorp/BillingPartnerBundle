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
    use Traits\ClicksCountTrait;
    use Traits\RequestRateLimitTrait;
    use Traits\OperationGroupLimitsTrait;
    use Traits\OveruseClickPriceTrait;
    use Traits\BillingPeriodTrait;
    use Traits\AcquisitionPriceTrait;
    use Traits\CustomBillingPeriodDaysTrait;
    use Traits\UsedClicksCountTrait;
    use Traits\AvailableClicksCountTrait;
    use Traits\DateTrait;

}
