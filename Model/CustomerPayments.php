<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class CustomerPayments
{

    use Traits\DateTrait;
    use Traits\AmountTrait;
    use Traits\ReasonTrait;
    use Traits\CustomerTariffTrait;

}
