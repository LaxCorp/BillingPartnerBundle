<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class Customer
{

    use Traits\IdTrait;
    use Traits\NameTrait;
    use Traits\EmailTrait;
    use Traits\LoginTrait;
    use Traits\PasswordTrait;
    use Traits\FromDateTrait;
    use Traits\ToDateTrait;
    use Traits\LastUpdateTrait;
    use Traits\AccountTrait;
    use Traits\DeferredPaymentPeriodTrait;
    use Traits\AcquisitionFeePaidTrait;
    use Traits\StateTrait;
    use Traits\PermissionsTrait;
    use Traits\CustomerPermissionsTrait;
    use Traits\CustomerTariffsTrait;
    use Traits\BillingStateTrait;
    use Traits\PrognosePeriodTrait;

}
